<?php

namespace JVL\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
//importamos nuestra entidad User para tener todas las propiedades de esta
use JVL\UserBundle\Entity\User;
//importamos nuestro form creado para poder llamarlo
user JVL\UserBundle\Form\UserType;
class UserController extends Controller


{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $users = $em->getRepository('JVLUserBundle:User')->findAll();
        
        return $this->render('JVLUserBundle:User:index.html.twig',array('users'=>$users));
    }
    
    public function viewAction($id){
        $repository = $this->getDoctrine()->getRepository('JVLUserBundle:User');
        $user = $repository->find($id);
        return new Response($user->getUsername());
    }
    
    public function addAction(){
        
        $user = new  User();
        
        $form = $this->createCreateForm($user);
        
        return $this->render('JVLUserBundle:User:add.html.twig',array('form'=>$form->createView()));
        
    }
    
  
}
