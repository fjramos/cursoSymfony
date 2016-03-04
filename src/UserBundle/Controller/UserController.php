<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;
use UserBundle\Form\UserType;

class UserController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $users = $em->getRepository('UserBundle:User')->findAll();
        
        /*
        $res = 'Lista de Usuarios: <br />';
        
        foreach ($users as $user) {
            $res .= 'Usuario: '.$user->getUsername().'-Email: '.$user->getEmail().'<br />';
            
        }
        
        return new Response($res);
        */
        
        return $this->render('UserBundle:User:index.html.twig',array('users'=>$users));
    }
    
    public function viewAction($id)
    {
       $repository = $this->getDoctrine()->getRepository('UserBundle:User');
       
       $user = $repository->find($id);
       
       //$user = $repository->findOneById($id); //Encuentra por id
       //$user = $repository->findOneByUserName($id); //Encuentra por nombredeusuario

       
       //return new Response('Usuario: '.$user->getUsername().'-Email: '.$user->getEmail().'<br />');
       
       return $this->render('UserBundle:User:view.html.twig',array('user'=>$user));
    }
    
    public function addAction()
    {
        $user = new User();
        $form = $this->createCreateForm($user);
        
        return $this->render('UserBundle:User:add.html.twig', array('form' => $form->createView()));
    }
    
    private function createCreateForm(User $entity)
    {
        $form = $this->createForm(UserType::class, $entity, array(
                'action' => $this->generateUrl('user_create'),
                'method' => 'POST'
            ));
        
        return $form;
    }
    
    public function createAction(Request $request)
    {
        $user = new User();
        $form = $this->createCreateForm($user);
        $form->HandleRequest($request);
        
        if($form->isValid())
        {
            $password = $form->get('password')->getData();
            
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($user, $password);
            
            $user->setPassword($encoded);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            return $this->redirectToRoute('user_index');
        }
        
        return $this->render('UserBundle:User:add.html.twig', array('form' => $form->createView()));
    }
}
