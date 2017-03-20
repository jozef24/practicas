<?php

namespace JVL\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        return  new Response('Bienvenido al modulo de usuarios'); 
    }
    
    public function articlesAction($page){
        return new Response('este es mi articulo '.$page);
    }
}
