<?php

class Equipe
{
	//propriétés
	public $nom;
	public $annee_de_creation;
	public $entraineur;
	public $couleur;
	public $rencontres =[];

/*	function __construct($nom, $annee, $entraineur, $couleur)
	{
		$this->nom=$nom;
		$this->annee_de_creation=$annee;
		$this->entraineur=$entraineur;
		$this->couleur=$couleur;
	}*/

	//méthodes
	function __construct($data)
	{
		//hydratation
		$this->nom 					= $data['nom'];
		$this->annee_de_creation 	= $data['annee_de_creation'];
		$this->entraineur 			= $data['entraineur'];
		$this->couleur 				= $data['couleur'];
	}

	function equipe(){
		$crew='';
		$crew.='<ul>';
		$crew.='<li>Equipe: '. $this->nom .'</li>';
		$crew.='<li>Date de création:'. $this->annee_de_creation .'</li>';
		$crew.='<li> Entraineur: '. $this->entraineur .'</li>';
		$crew.='<li>Couleur '. $this->couleur .'</li>';
		$crew.='</ul>';

		return $crew;
	}

	function joueContre($adversaire, $lieu, $date)
	{
	//ajoute au tableau des rencontres, un tableau associatif
	//contenant les infos de la rencontre	
		array_push($this->rencontres, [
			"adversaire"	=> $adversaire,
			"lieu"			=> $lieu,
			"date" 			=> $date
		]);
	}
}

?>