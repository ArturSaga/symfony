<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class PostController extends AbstractController
{
    public function __construct()
    {
    }

    /**
     * @Route("/", name="app")
     */
    public function index(): Response
    {
        $user = $this->getUser();
        return $this->render('post/index.html.twig', [
            'user' => $user,
            'controller_name' => 'Hello world!!!',
        ]);
    }

    /**
     * @Route("/show", name="app_show")
     */
    public function show(): Response
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => 'Frontitutka!',
        ]);
    }
}
