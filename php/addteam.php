<?php
include 'includes/util.inc.php';
include 'includes/header.php';
include 'includes/menu.php';
include 'includes/equipe.inc.php';

if(isset($_POST['input'])){
		
//upload du fichier
	if($_FILES["logo"]["size"] <500000) {

		$source=$_FILES["logo"]["tmp_name"];

		$extension = substr($_FILES["logo"]["name"], -4);

		$destination='img/logo/'. $_POST["nom"].$extension;
		
		// déplacer le fichier de la zone temporaire vers son
		// emplacement "définitif" sur le serveur
		move_uploaded_file($source, $destination);
		
		$teams=$_POST; //copie $_POST dans $team;

		//on ajoute la clé 'logo' au tableau associatif $team
		$teams['logo'] = $destination;
	
	if (createTeam($teams)){
		// redirection
		header('location:equipes.php');
	}
	else {
		echo '<p class="text-warning">L\' engregistrement a échoué</p>';
	}
	} else{
	echoP("Fichier trop lourd");	
	}
}
?>

<h1>Enregister une Equipe</h1>

<div class="container">	
 <!--enctype="multipart/form-data" pour envoyer des fichiers -->
	<form method="POST" enctype="multipart/form-data">
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

	  		<div class="col-md-6">
	  			<label>Logo</label>
				<input type="file" name="logo">
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