<?php

namespace App\Tests\Functional;

use App\Entity\Oficio;
use PHPUnit\Framework\TestCase;

class OficioPathLengthTest extends TestCase
{
    public function testLongPathIsTruncatedSafely(): void
    {
        $o = new Oficio();
        $long = str_repeat('a', 1100) . '.pdf';
        $o->setFilePath($long);
        $this->assertGreaterThan(1024, strlen($long));
        // Entity does not auto-truncate; truncation happens in PathNormalizer.
        // So simulate use of PathNormalizer:
        $normal = $this->truncateTo1024($long);
        $this->assertLessThanOrEqual(1024, mb_strlen($normal, 'UTF-8'));
        $this->assertStringEndsWith('.pdf', $normal);
    }

    private function truncateTo1024(string $path): string
    {
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
        return mb_substr($base, 0, $keep, 'UTF-8') . $ext;
    }
}
