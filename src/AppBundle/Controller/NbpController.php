<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NbpController extends Controller {

    /**
     * @Route("/", name="list") 
     */
    public function priceCoursebyCountry() {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://api.nbp.pl/api/exchangerates/tables/A/');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json')); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);


       $currently_price = json_decode($response);
       
       //dump($currently_price); die();

        return $this->render('cantor/home.html.twig', [
           'act_price' => $currently_price
        ]);
    }

}
