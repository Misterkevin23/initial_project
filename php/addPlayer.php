<?php
include 'includes/util.inc.php';
include 'includes/header.php';
include 'includes/menu.php';

if(isset($_POST['input'])){
	/*echo 'Le client a validé le formulaire';*/
	//-->1--connexion<---
	$db = new PDO('mysql:host=localhost;dbname=formation-poec', 'root', '');

	//-->2--requête<--
	$query = $db->prepare(
		'INSERT INTO joueur (nom, prenom, age) VALUES (:name, :firstname, :age)'
		);
	//-->3--Execution<--
	$query->execute(array(
		'name'=>$_POST['nom'],
		'firstname'=>$_POST['prenom'],
		'age'=>$_POST['age']
		));
}
else{
	/*echo 'Le client n\'a pas validé';*/
	
}




?>
<h1>Enregister un joueur</h1>

<form method="POST">
	<label>Nom</label>
	<input type="text" name="nom">

	<label>Prénom</label>
	<input type="text" name="prenom">

	<label>Age</label>
	<input type="text" name="age">

	<input type="submit" name="input" value="Enregister">
</form>

<?php include 'includes/footer.php'; ?>