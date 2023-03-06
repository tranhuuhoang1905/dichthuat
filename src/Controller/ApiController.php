<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
#[Route('/api')]
class ApiController extends AbstractController
{
    #[Route('/login', name: 'app_api_login')]
    public function index(Request $request): Response
    {
        $userName = $request->request->get('username');
        $password = $request->request->get('password');

        $dataRes = [
            "token"=>"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwicm9sZSI6ImFkbWluIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c",
            "user"=>[
                "id"=>"1234567890",
                "name"=>$userName,
                "role"=>"admin"
            ]
        ];
        return new JsonResponse($dataRes);
    }
}
