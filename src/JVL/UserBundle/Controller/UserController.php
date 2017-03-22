<?php

namespace JVL\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $users = $em->getRepository('JVLUserBundle:User')->findAll();
        
        /*$res = 'lusta de ususarios<br/>';
        foreach($users as $user){
            
            $res .= 'Usuario: '.$user->getUsername(). ' email'.$user->getEmail().'<br/>';
        }
        
        return new Response($res);*/
        return $this->render('JVLUserBundle:User:index.html.twig',array('users'=>$users));
    }
    
    public function viewAction($id){
        $repository = $this->getDoctrine()->getRepository('JVLUserBundle:User');
        $user = $repository->find($id);
        return new Response($user->getUsername());
    }
    
  
}
