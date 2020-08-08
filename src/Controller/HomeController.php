<?php 

namespace App\Controller;

use App\Entity\Frais;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;


class HomeController extends AbstractController
{
    public function index(){
       // return new Response( 'Connexion !');
       return new Response($this->renderView('base.html.twig'));
    }
    
   


}