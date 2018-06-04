<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NbpController extends Controller{
    
    
    /**
     *@Route("/", name="list") 
     */
    public function listAction(){
        
        $test = 'Twój kantor On-line';
        $task = 'Programujemy w Symfony 3.4';
        
        
        return $this->render('cantor/home.html.twig', [
            'test' => $test,
            'task' => $task
        ]);
    }
}

