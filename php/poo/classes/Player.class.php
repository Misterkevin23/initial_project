<?php

class Player
{
	public $db;

	public $id; //nécessaire pour les opérations de mise à jour et de suppression
	public $nom;
	public $premon;
	public $age;
	public $numeros_maillot;
	public $equipe;

	function __construct($data)
	{
		//1)connexion
		$this->db 				= new PDO('mysql:host=localhost;dbname=formation-poec', 'root', '');
		
		//si l'identificiant du joueur fait partie du tableau de
		//données passé en entrée du constructeur, on l'utilise pour hydrater la propriété id de l'objet
		if(isset($data['id'])){
			$this->id 			=$data['id'];
		}
		$this->nom 				= $data['nom'];
		$this->premon 			= $data['prenom'];
		$this->age 				= $data['age'];
		$this->numeros_maillot 	= $data['numeros_maillot'];
		$this->equipe 			= $data['equipe'];
	}

	function save()
	{
		//3)requête
		$query = $this->db->prepare('
			INSERT INTO joueur (nom, prenom, age, numeros_maillot, equipe) VALUES (:name, :firstname, :age, :numeros_maillot, :equipe)
		');
		//3)execution
		return $query->execute(array(
		':name'				=>$this->nom,
		':firstname'		=>$this->premon,
		':age'				=>$this->age,
		':numeros_maillot'	=>$this->numeros_maillot,
		':equipe'			=>$this->equipe
		));
	}

	function update()
	{
		$query = $this->db->prepare(
			'UPDATE joueur 
			SET prenom = :prenom, nom = :nom, age = :age, numeros_maillot = :numeros_maillot, equipe = :equipe  
			WHERE id = :id'
		);
		
		return $query->execute(array(

		':nom'					=>$this->nom,
		':prenom'				=>$this->premon,
		':age'					=>$this->age,
		':numeros_maillot'		=>$this->numeros_maillot,
		':equipe'				=>$this->equipe,
		':id'					=>$this->id
		));
	}


}

?>