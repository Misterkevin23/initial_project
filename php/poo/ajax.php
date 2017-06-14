<?php
include 'classes/PlayerManager.class.php';
include_once 'classes/Player.class.php';

//point d'entrée (entry point) des requêtes ajax envoyées
//par le client



if(empty($_POST))
{
	switch ($_GET['action'])
	{
		case 'list':
			$pm= new PlayerManager();
			echo json_encode($pm->getListFromAjax());
			break;

		case 'delete':
			$pm= new PlayerManager();
			if($pm->getById($_GET['id'])->delete())
			{
				echo "Joueur supprimé";
			}
			else 
			{
				echo 'la tentative de suppression a échoué';
			}		
			break;	
		
		default:
			echo 'An pa ka comprendre Requete là ca!';
			break;
	}
}
else
{
	echo json_encode($_POST);
}


?>