<?php
include 'includes/util.inc.php';
include 'includes/header.php';
include 'includes/menu.php';
include 'includes/equipe.inc.php';

if(isset($_POST['input'])){
	/*echo 'Le client a validé le formulaire';*/
	//-->1--connexion<---
	$db = new PDO('mysql:host=localhost;dbname=formation-poec', 'root', '');

	//-->2--requête<--
	$query = $db->prepare(
		'INSERT INTO equipe (nom, entraineur, couleurs) VALUES (:nom, :entraineur, :couleurs)'
		);
	//-->3--Execution<--
	$query->execute(array(
		':nom'=>$_POST['nom'],
		':entraineur'=>$_POST['entraineur'],
		':couleurs'=>$_POST['couleurs']
		));

var_dump($_POST);
	//-->4)redirection
	// header('location:joueurs.php');
}
else{
	/*echo 'Le client n\'a pas validé';*/
	
}







?>

<h1>Enregister une Equipe</h1>

<div class="container">	
	<form method="POST">
	  	<div class="row">
	  		<div class="col-md-4">
		  		<label>Nom</label>
				<input type="text" name="nom">
	  		</div>

	  		<div class="col-md-4">
	  			<label>Entraineur</label>
				<input type="text" name="entraineur">
	  		</div>

	  		<div class="col-md-4">
	  			<label>Couleur</label>
				<input type="text" name="couleurs">
	  		</div>

	  	</div>

	  	
	  	<div class="row">
	  		<div col-md-12>
	  		<input type="submit" name="input" value="Enregister">
	  		</div>

	  	</div>

	</form>

</div>






<?php include 'includes/footer.php'; ?>