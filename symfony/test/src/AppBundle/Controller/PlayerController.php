<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Player;

class PlayerController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */

    //la syntaxe Request $request equivaut à $request = new Request()
    //Elle correspond à la partie envoi du protocole http venant du client au serveur
    public function indexAction(Request $request) 
    {
        $titre = 'Liste des joueur';

        $joueur1 = ['nom' => 'Bonnucci', 'prenom' => 'Leo', 'age' => 29];
        $joueur2 = ['nom' => 'Chiellini', 'prenom' => 'Giorgio', 'age' => 34];
        $joueur3 = ['nom' => 'Barzagli', 'prenom' => 'Andrea', 'age' => 36];

        $joueurs = [$joueur1, $joueur2, $joueur3];
        //chargement des joueurs depuis la base de données
        //Récuperation du repository
        $repository = $this ->getDoctrine()
                            ->getManager()
                            ->getRepository('AppBundle:Player');

        $players = $repository -> findAll();

        return $this->render('player/index.html.twig', array(
            'titre'     =>$titre,
            'message'   =>'Symfony semble formidable',
            'joueur1'   =>$joueur1,
            'joueurs'   =>$joueurs,
            'players'   =>$players
        ));
    }
    
    /**
     * @Route("/player/add", name="addplayer")
     */

    public function addAction(Request $request)
    {
        $player = new Player();
        $player->setNom("Totti");
        $player->setPrenom("Francesco");
        $player->setAge(40);

        //récupération de l'Entity Manager
        //objet permettant in fine d'intéragir avec la base
        $em = $this->getDoctrine()-> getManager();

        //étape 1 : on "persiste" les données => enregistrement en base de donnée
        $em->persist($player);

        //étape 2 : nettoyage

        $em->flush();

        //On DOIT retourner une reponse HTTP au client
        return new Response('joueur ajouté avec succès');
    }

}
