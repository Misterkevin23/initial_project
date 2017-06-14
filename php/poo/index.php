<?php

include 'classes/Client.class.php';
include 'classes/Equipe.class.php';

//orienté objet
class Joueur {
	public $nom 		= 'Zidane';
	public $prenom 		= 'Zinedine';
	public $age;
	
	//méthode
	public function identite(){
		echo strtoupper($this->nom).' '.$this->prenom;
	}
}

$j1 = new Joueur(); //new operateur d'instanciation
$j2 = new Joueur(); // l'instanciation produit un objet à partir d'une classe
$j3 = new Joueur();

$equipe= array(); // []tableau vide

for ($i=0; $i<11; $i++){
	$joueur = new Joueur();
	//array_push($equipe, $joueur); // En JS: equipe.push(joueur)
	$equipe[$i] = $joueur;
}

//équivalent en orienté procédural

function creeJoueur(){
	//modelisation des données par tableau associatif
	$joueur = [
	'nom'=>'Zidane',
	'prenom' => 'Enzo',
	'age'=> null
	];
	//la function creeJoueur renvoi un tableau associatif, PAS UN OBJET
	return $joueur; 
}

function identite($joueur){
	echo strtoupper($joueur['nom']) . ' ' . $joueur['prenom'];
}

$j4 = creeJoueur(); // création d'un joueur en style procédural
$j5 = creeJoueur();

//utilisation de la classe Client
$client1 = new Client('Langlais', 'Sophie', '7777 4242 4444 2323 ');

//on peut appeler isCbValid depuis l'extérieur de la classe 
//car cette méthode  est public
if ($client1->isCbValid())
{
	echo "le numero de CB du client 1 est valide";
}

//test
/*$cb = '4923 2145 8899 6330';
$result = str_replace(' ', '', $cb);
 echo $result;*/

//utilisation de la classe Equipe
$psg= [
	'nom'				=>'PSG',
	'annee_de_creation' => 1970,
	'entraineur' 		=> 'Unai Emery',
	'couleur' 			=> 'bleu, rouge'
];

$juve= [
	'nom'				=>'Juventus',
	'annee_de_creation' => 1897,
	'entraineur' 		=> 'Massimiliano Allegri',
	'couleur' 			=> 'blanc, noir'
];

$equipe1 = new Equipe ($psg);
$equipe2 = new Equipe ($juve);

// $equipe1 = new Equipe ('PSG', 1904 , 'Unai Emery', 'rouge,bleu');
echo $equipe1->equipe();
// $equipe2 = new Equipe ('Olympique de Marseille', 1932, 'Rudi Garcia', 'blanc,bleu');
echo $equipe2->equipe();

//var_dump ($psg); // => array
//var_dump($equipe1); //=> object

$equipe1->joueContre('Benfica', 'Paris', '14/02/2005');
$equipe1->joueContre('Porto', 'Paris', '16/02/2005');
$equipe1->joueContre('Madrid', 'Cardiff', '18/02/2005');

var_dump($equipe1);

?>

<h1>POO en PHP</h1>

<?php 

	echo '<p>'.$j1->nom.'</p>';
	echo '<p>'.$j2->prenom.'</p>';

	$j3->nom= 'Baggio'; //écriture
	$j3 ->prenom= 'Roberto';
	$j3->age= 39;

	echo '<p>'.$j3->nom.' '.$j3->prenom. ' ('.$j3->age .' ans)</p>';

	$j3->identite(); // appel à la function (méthode) identité en style objet

	echo '<p>'.$j4['nom'].'</p>';
	echo '<p>'.$j5['prenom'].'</p>';

	identite($j5); // appel à la function identité  en style procédural

	// visibilité des membres d'une classe en POO

	$alban = new Client("CARROUE", "Alban", "1111222233334444");
	echo '<br>' . $alban->getNbCb();

	$alban->setNbCb("1234"); // la mise à jour non effectuée car
	//la valeur passée en entrée ne correspond pas au critère de
	//validation (longueur 16) imposée par la methode privée isCbok() uitilisée
	//en interne par le setteur stNBcB()
	echo '<br>' . $alban->getNbCb();

	$alban->setNbCb("1234567891234567"); // ici, la modification est autorisé
	//par la méthode privée isCbOk();
	echo '<br>' . $alban->getNbCb();

?>