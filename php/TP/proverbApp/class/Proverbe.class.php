<?php 
class Equipe
{

	//propriétés
	private $origin;
	private $corp;
	private $categorie;

	//function
	function __construct($data)
	{
		//hydratation
		$this->origin 				= setOrigin($data['origin']);
		$this->corp 				= setCorp($data['corp']);
		$this->categorie 			= setCategorie($data['categorie']);
	}

	public function getOrigin()
	{
		return $this->origin;
	}

	public function setOrigin($value)
	{
		$this->origin = $value;
	}

	public function getCorp()
	{
		return $this->corp;
	}

	public function setCorp($value)
	{
		$this->corp = $value;
	}

	public function getCategorie()
	{
		return $this->categorie;
	}

	public function setCategorie($value)
	{
		$this->categorie = $value;
	}

	private function connectDb()
	{
		$db = new PDO('mysql:host=localhost;dbname=tp', 'root', '');
		return $db:
	}

	public function addProverbe ()
	{
		$db=connectDb()
			//3)requête
		$query = $this->db->prepare('
			INSERT INTO joueur (origin, corp, categorie) 
			VALUES (:origin, :corp, :categorie)
		');
		//3)execution
		return $query->execute(array(
		':origin'				=>$this->getOrigin(),
		':corp'					=>$this->getCorp(),
		':categorie'			=>$this->getCategorie(),
		));
	}

	}






}
?>