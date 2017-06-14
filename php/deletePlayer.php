<?php
include 'includes/connexion_db.php'; // fournit connnect();
include 'includes/util.inc.php';

//Récuperation de l'identifiant du joueur
if(isset($_GET["id"])){
	$id=$_GET["id"];

//1) connexion
	$db= connect();

//2) requete
	$query = $db -> prepare('DELETE FROM joueur WHERE id= :id');

//3) execution
	$query-> execute(array(
		':id'=>$id
	));
	if (isset($_GET['ajax']))
		//requête reçue en http ajax
	{
		echo "le joueur d'id " . $id . " a été supprimé";
	}
	else
	{
	//redirection vers liste des joueurs
	header('location:joueurs.php');	
	}
}

?>
