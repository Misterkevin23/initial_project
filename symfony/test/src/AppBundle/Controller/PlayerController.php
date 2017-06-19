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

        return $this->render('player/index.html.twig', array( //la methode render fournie les donnée a la view
            'titre'     =>$titre,
            'message'   =>'Symfony semble formidable',
            'joueur1'   =>$joueur1,
            'joueurs'   =>$joueurs,
            'players'   =>$players
        ));
    }
    
    /**
     * @Route("/test/player/add", name="testaddplayer")
     */

    public function testAddAction(Request $request)
    {
        $player = new Player();
        $player->setNom("Diego Armando");
        $player->setPrenom("Maradonna");
        $player->setAge(54);
        $player->setNumeroMaillot(10);

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

    /**
     * @Route("/player/add", name="addplayer")
     */

    public function addAction (Request $request)
    {
        //déterminer si cette route à été demandée en POST ou en GET
        if($request->isMethod('POST'))
        {
            $player = new Player();
            $player->setNom($request->get('nom'));
            $player->setPrenom($request->get('prenom'));
            $player->setAge($request->get('age'));
            $player->setNumeroMaillot($request->get('numero_maillot')); 
            $em = $this->getDoctrine()-> getManager();
            $em->persist($player);
            $em->flush();
            // redirection vers la page d'accueil
            return $this->redirectToRoute('homepage');
        }
        else
        {
            return $this->render('/player/forms/add.html.twig');
        }    
        
    }

     /**
     * @Route("/player/{id}", name="detail_player")
     */

    public function detailAction($id)     //pour récuperer l'id donnée dans l'url, il suffit
    //de le mettre en argument dans la fonction
    {

        //->getDoctrine()   Récupère l'ORM
        //->getManager()    Outil pour opérations en écriture
        //->getRepository() Outils pour opération en lecture
        $repository = $this
                        ->getDoctrine()
                        ->getManager()
                        ->getRepository ('AppBundle:Player');

        // récupération de l'id
        // $id =$request->query->get('id'); //renvoi NULL
        // var_dump($id);         

        //trouver le joueur correspondant en base de données
        $player = $repository->find($id); // find() == findById() cherche toujours dans
        //la colonne id de la table sql
        
        //Afficher les informations via une vue/template (fichier twig)
        //render() associe la vue(fichier.twig) passé en premier argument
        //avec le tableau associatif passé en deuxième argument
        //Les données que le controller fournit à la vue seront
        //accessible (affichables, itérables, etc) par cette dernière               
        return $this->render('player/detail.html.twig', array(
            'player' => $player
        ));
    }


}
