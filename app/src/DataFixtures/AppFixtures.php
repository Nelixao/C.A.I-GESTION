<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }

    public function load(ObjectManager $manager): void
    {
        // Usuario administrador
        $admin = new User();
        $admin->setEmail('admin@example.com');
        $admin->setNombre('Administrador');
        $admin->setRol('Admin'); // activa ROLE_ADMIN por mapeo
        $hashed = $this->passwordHasher->hashPassword($admin, 'admin123');
        $admin->setContrasena($hashed);
        $manager->persist($admin);

        // Usuario normal
        $user = new User();
        $user->setEmail('usuario@example.com');
        $user->setNombre('Usuario Demo');
        $user->setRol('Usuario'); // solo ROLE_USER
        $hashed2 = $this->passwordHasher->hashPassword($user, 'usuario123');
        $user->setContrasena($hashed2);
        $manager->persist($user);

        $manager->flush();
    }
}
