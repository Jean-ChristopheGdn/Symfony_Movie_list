<?php

namespace App\Controller;

use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
            
        public function admin()
        {
    
            $users = $this->getDoctrine()->getRepository(Users::class)->findAll();
    
            return $this->render('admin/index.html.twig', [
                'users' => $users
            ]);
        }
    
}
