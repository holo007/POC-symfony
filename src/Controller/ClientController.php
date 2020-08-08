<?php 

namespace App\Controller;

use App\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends AbstractController
{
    // public function listeClients(){
    //     //return new Response( 'Liste Clients !');
    //     return new Response($this->renderView('clients/liste.html.twig'));
    // }

    public function listeClients(){

        //tableau clients
        $clients = $this->getDoctrine()->getRepository(Client::class)->findAll();
        var_dump($clients);
        
        return new Response($this->renderView('clients/liste.html.twig',['clients'=>$clients]));
    
    }


}