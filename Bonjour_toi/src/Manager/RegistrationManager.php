<?php

namespace App\Manager;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class RegistrationManager
{
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function createUser(User $user)
    {
        $this->em->persist($user);
        $this->em->flush();
    }
}