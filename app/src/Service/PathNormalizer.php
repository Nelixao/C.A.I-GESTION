<?php

namespace App\Service;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class PathNormalizer
{
    public function __construct(private readonly ParameterBagInterface $params)
    {
    }

    public function isDataUri(?string $input): bool
    {
        if ($input === null) return false;
        return str_starts_with(trim($input), 'data:');
    }

    public function normalize(?string $input): string
    {
        if ($input === null) {
            return '';
        }
        $path = trim($input);

        // If a data URI, try to persist to uploads and return relative path
        if ($this->isDataUri($path)) {
            $saved = $this->persistDataUri($path);
            $path = $saved ?? '';
        }

        // Replace backslashes with slashes
        $path = str_replace('\\\\', '/', $path);

        // Remove control chars
        $path = str_replace(["\r","\n","\t"], '', $path);
        // Remove a small set of dangerous characters
        $danger = ['<','>','"','\'','`','|'];
        $path = str_replace($danger, '', $path);

        // Collapse multiple slashes
        while (str_contains($path, '//')) { $path = str_replace('//','/',$path); }

        // Make relative to project/public if absolute inside project
        $projectDir = rtrim((string)$this->params->get('kernel.project_dir'), '/');
        $publicDir = $projectDir . '/public';
        if (str_starts_with($path, $publicDir . '/')) {
            $path = substr($path, strlen($publicDir) + 1);
        } elseif (str_starts_with($path, $projectDir . '/')) {
            $path = substr($path, strlen($projectDir) + 1);
        }

        // Normalize path segments to avoid .. and .
        $parts = [];
        foreach (explode('/', $path) as $seg) {
            if ($seg === '' || $seg === '.') { continue; }
            if ($seg === '..') { array_pop($parts); continue; }
            $parts[] = $seg;
        }
        $path = implode('/', $parts);

        // Final truncate to 1024 chars (try to keep extension)
        if (mb_strlen($path, 'UTF-8') > 1024) {
            $ext = '';
            $dot = strrpos($path, '.');
            if ($dot !== false && $dot > 0) {
                $ext = substr($path, $dot);
                $base = substr($path, 0, $dot);
            } else {
                $base = $path;
            }
            $keep = 1024 - strlen($ext);
            if ($keep < 0) { $keep = 1024; $ext = ''; }
            $path = mb_substr($base, 0, $keep, 'UTF-8') . $ext;
        }

        return $path;
    }

    private function persistDataUri(string $data): ?string
    {
        // data:[<mediatype>][;base64],<data>
        if (!preg_match('~^data:([^;,]+)?(;base64)?,(.*)$~s', $data, $m)) {
            return null;
        }
        $mime = $m[1] ?? 'application/octet-stream';
        $isBase64 = isset($m[2]) && $m[2] === ';base64';
        $raw = $m[3] ?? '';
        $bin = $isBase64 ? base64_decode($raw, true) : urldecode($raw);
        if ($bin === false) { return null; }

        $ext = $this->guessExtensionFromMime($mime);
        $name = 'datauri-'.bin2hex(random_bytes(8)).($ext ? ('.'.$ext) : '');

        $projectDir = rtrim((string)$this->params->get('kernel.project_dir'), '/');
        $uploadDir = $projectDir.'/public/uploads';
        if (!is_dir($uploadDir)) { @mkdir($uploadDir, 0775, true); }
        $target = $uploadDir.'/'.$name;
        if (file_put_contents($target, $bin) === false) {
            return null;
        }
        return 'uploads/'.$name;
    }

    private function guessExtensionFromMime(string $mime): ?string
    {
        return match ($mime) {
            'image/png' => 'png',
            'image/jpeg' => 'jpg',
            'image/gif' => 'gif',
            'application/pdf' => 'pdf',
            default => null,
        };
    }
}
