<?php 

namespace App\Controller;

use App\Entity\Frais;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;


class FraisController extends AbstractController
{
 
    public function listeFrais(){
        $allFrais = $this->getDoctrine()->getRepository(Frais::class)->findAll();
        
        //return new Response($this->renderView('frais/liste.html.twig'));
        return new Response($this->renderView('frais/liste.html.twig',['frais_liste'=>$allFrais]));
    }


}