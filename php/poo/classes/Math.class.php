<?php

class Maths 
{
	public $nb1;
	public $nb2;

	function __construct ($nb1, $nb2)
	{
		$this->nb1		=$nb1;
		$this->nb2		=$nb2;

	}

	function add()
	{
		$add= $this->nb1 + $this->nb2;
		$result='Le resultat de l\'addition de '.$this->nb1.' et ' . $this->nb2 .' : '.$add.'<br>';
		return $result;

	}

	function multiply()
	{
		$multi= $this->nb1 * $this->nb2;
		$result='Le resultat de la multiplication  de '.$this->nb1.' et ' . $this->nb2 .' : '.$multi.'<br>';
		return $result;
	}

	function substract($v1, $v2)
	{
		//retourne le résultat de la soustraction
		//entre deux valeurs fournies lors de l'appel
		//de la méthode
		//A la différence des méthodes add et multiply
		//nous n'opérons pas ici sur les propriétés internes
		//de la classe (objets issues de cette classe)
		$subs= $v1 - $v2;
		$result='Le resultat de la soustraction  de '.$v1.' et ' . $v2 .' : '.$subs.'<br>';
		return $result;
	}
}


?>