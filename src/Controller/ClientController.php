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
        
        
        return new Response($this->renderView('clients/liste.html.twig',['clients'=>$clients]));
    
    }

    public function showClientFrais($id)
    {
        $client = $this->getDoctrine()->getRepository(Client::class)->find($id);
        $frais = $client->getFrais();
        return new Response($this->render('clients/show.html.twig', [
            'client' => $client,
            'frais' => $frais,
        ]));
    } 


}