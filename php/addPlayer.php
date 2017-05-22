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
		'INSERT INTO joueur (nom, prenom, age, numeros_maillot) VALUES (:name, :firstname, :age, :numeros_maillot)'
		);
	//-->3--Execution<--
	$query->execute(array(
		'name'=>$_POST['nom'],
		'firstname'=>$_POST['prenom'],
		'age'=>$_POST['age'],
		'numeros_maillot'=>$_POST['numeros_maillot']
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

	<label>Numeros de maillot</label>
	<!-- <input type="text" name="numeros_maillot"> -->
	<select name="numeros_maillot">
		<?php
			for($i=1; $i<1000; $i++){
				echo '<option>'.$i.'</option>';
			}
		?>
	<select>

	<input type="submit" name="input" value="Enregister">
</form>

<?php include 'includes/footer.php'; ?>