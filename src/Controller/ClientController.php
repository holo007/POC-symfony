<?php 

namespace App\Controller;

use App\Entity\Client;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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


    public function add(Request $request){
        $client = new Client();

        //création du formulaire
        $form = $this->createFormBuilder()
            ->add('nom',TextType::class)
            ->add('envoyer', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);
       
        //si le form est posté
        if ($form->isSubmitted() && $form->isValid()){

            $formData = $form->getData();

            $client->setNom($formData['nom']);
     
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($client);
            $entityManager->flush(); 
            
            return $this->redirectToRoute('clients_liste');
            
        }
        

        return new Response($this->renderView('clients/add.html.twig',["form_title" => "Ajouter un client",
        "form" => $form->createView()]));

    }

    public function delete($id,Request $request){

        $clientDel = $this->getDoctrine()->getRepository(Client::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($clientDel);
        $entityManager->flush(); 
        return $this->redirectToRoute('clients_liste');
    }


    


}