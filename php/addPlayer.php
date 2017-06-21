<?php
include 'includes/util.inc.php';
include 'includes/equipe.inc.php';
include_once 'includes/access.inc.php';
include 'includes/header.php';
include 'includes/menu.php';

//version 1
/*if(isset($_SESSION['user']))
{
	if($_SESSION['user']['role']=='admin' || 'client')
	{
	include 'includes/Forms/addPlayer.inc.php';	
	}
	else
	{
		echOgmP('Droits insuffisants');
	}
}
else
{
	echOgmP('Il faut d\'abord ce logger!');
}	*/

//Version 2
if (isLogged())
{
	if (getRole()=='admin' || 'client')
	{
		include 'includes/Forms/addPlayer.inc.php';
	}
	else
	{
		echOgmP('Droits insuffisants');
	}
}
else
{
	echOgmP('Il faut d\'abord ce logger!');
}



if(isset($_POST['input'])){
	/*echo 'Le client a validé le formulaire';*/
	//-->1--connexion<---
	$db = new PDO('mysql:host=localhost;dbname=formation-poec', 'root', '');

	//-->2--requête<--
	$query = $db->prepare(
		'INSERT INTO joueur (nom, prenom, age, numeros_maillot, equipe) VALUES (:name, :firstname, :age, :numeros_maillot, :equipe)'
		);
	//-->3--Execution<--
	$query->execute(array(
		':name'=>$_POST['nom'],
		':firstname'=>$_POST['prenom'],
		':age'=>$_POST['age'],
		':numeros_maillot'=>$_POST['numeros_maillot'],
		':equipe'=>$_POST['equipe']
		));

	//-->4)redirection
	header('location:joueurs.php');
}
else{
	/*echo 'Le client n\'a pas validé';*/
	
}


?>



<?php include 'includes/footer.php'; ?>