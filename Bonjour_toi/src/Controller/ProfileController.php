<?php

namespace App\Controller;

use App\Form\ProfileFormType;
use App\Repository\ProfileRepository;
use App\Repository\ProjetsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{

    public function __construct()
    {

    }

    /**
     * @Route("/profile", name="profile")
     */
    public function index(ProfileRepository $repo): Response
    {
        $profile = $repo->findAll();

        return $this->render('profile/index.html.twig', [
            'controller_name' => 'ProfileController',
            'profile' => $profile,
        ]);
    }

}
