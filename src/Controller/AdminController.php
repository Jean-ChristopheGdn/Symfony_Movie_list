<?php

namespace App\Controller;

use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\EditUserType;


/**
 * @Route("/admin", name="admin_")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/users", name="users")
     */
    public function users()
    {
        $users = $this->getDoctrine()->getRepository(Users::class)->findAll();

        return $this->render('admin/users.html.twig', [
            'users' => $users
        ]);
    }

    /**
     * @Route("/user/edit/{id}", name="edit_user")
     */
    public function editUser(Users $user, Request $request)
    {
      $form = $this->createForm(EditUserType::class, $user);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        $this->addFlash('message', 'User edited!');
        return $this->redirectToRoute('admin_users');
      }
      return $this->render('admin/edituser.html.twig', [
        'userForm' => $form->createView()
      ]);
    }
}
