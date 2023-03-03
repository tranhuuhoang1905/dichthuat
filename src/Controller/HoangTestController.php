<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

#[Route('/hoangtest')]
class HoangTestController extends AbstractController
{
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository,Security $security,PostRepository $postRepository): Response
    {

        $user = $userRepository->findAll();
        $userAuth = $security->getUser();
        $rolses = $userAuth->getRoles();
        $isAdmin = 0;
        foreach ($rolses as $key => $value) {
            if ($value == "ROLE_ADMIN") {
                $isAdmin = 1;
            }
        }
        $isAdmin = 0;
        
        if ($isAdmin) {
             return $this->redirectToRoute('admin');
        }

        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
        
    }

    #[Route('/test', name: 'app_hoangtest_index', methods: ['GET'])]
    public function test(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/test2', name: 'app_hoangtest2_index', methods: ['GET'])]
    public function test2(UserRepository $userRepository): Response
    {

        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    
}
