<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class AuthController extends AbstractController
{
    #[Route('/register', name: 'app_register', methods: ['GET','POST'])]
    public function register(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $hasher): Response
    {
        if ($request->isMethod('POST')) {
            $name = trim((string)$request->request->get('nombre'));
            $email = trim((string)$request->request->get('email'));
            $password = (string)$request->request->get('password');
            $csrf = (string)$request->request->get('_csrf_token');

            if (!$this->isCsrfTokenValid('register', $csrf)) {
                $this->addFlash('danger', 'Token inválido, intenta nuevamente.');
                return $this->redirectToRoute('app_register');
            }

            $errors = [];
            if ($name === '') { $errors[] = 'El nombre es obligatorio.'; }
            if ($email === '') { $errors[] = 'El correo es obligatorio.'; }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors[] = 'El correo no es válido.'; }
            if (strlen($password) < 6) { $errors[] = 'La contraseña debe tener al menos 6 caracteres.'; }

            if (empty($errors)) {
                $existing = $em->getRepository(User::class)->findOneBy(['email' => $email]);
                if ($existing) {
                    $errors[] = 'Ya existe un usuario con ese correo.';
                } else {
                    $user = new User();
                    $user->setNombre($name);
                    $user->setEmail($email);
                    // Por defecto, rol "Usuario" mapea a ROLE_USER
                    $user->setRol('Usuario');
                    $hashed = $hasher->hashPassword($user, $password);
                    $user->setContrasena($hashed);
                    $em->persist($user);
                    $em->flush();

                    $this->addFlash('success', 'Cuenta creada. Ya puedes iniciar sesión.');
                    return $this->redirectToRoute('app_login');
                }
            }

            foreach ($errors as $e) {
                $this->addFlash('danger', $e);
            }
        }

        return $this->render('security/register.html.twig');
    }

    #[Route('/forgot-password', name: 'app_forgot_password', methods: ['GET','POST'])]
    public function forgotPassword(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $csrf = (string)$request->request->get('_csrf_token');
            if (!$this->isCsrfTokenValid('forgot_password', $csrf)) {
                $this->addFlash('danger', 'Token inválido, intenta nuevamente.');
                return $this->redirectToRoute('app_forgot_password');
            }
            $email = trim((string)$request->request->get('email'));
            if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->addFlash('danger', 'Ingresa un correo válido.');
                return $this->redirectToRoute('app_forgot_password');
            }
            // Implementación mínima: solo mostramos mensaje. No se envía email.
            $this->addFlash('info', 'Si el correo existe, recibirás instrucciones para restablecer tu contraseña.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('security/forgot_password.html.twig');
    }
}
