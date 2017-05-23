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

<h1>Enregister un joueur</h1>

<div class="container">	
	<form method="POST">
	  	<div class="row">
	  		<div class="col-md-4">
		  		<label>Nom</label>
				<input type="text" name="nom">
	  		</div>

	  		<div class="col-md-4">
	  			<label>Prénom</label>
				<input type="text" name="prenom">
	  		</div>

	  		<div class="col-md-4">
	  			<label>Age</label>
				<input type="text" name="age">
	  		</div>

	  	</div>

	  	<div class="row">
	  		<div class="col-md-6">
	  			<label>Numeros de maillot</label>
				<!-- <input type="text" name="numeros_maillot"> -->
				<select name="numeros_maillot">
					<?php
						for($i=1; $i<1000; $i++){
							echo '<option>'.$i.'</option>';
						}
					?>
				</select>
	  		</div>

	  		<div class="col-md-6">
	  			<label>Equipe</label>
	  			<?php echo selectFormat(getTeams()); ?>
	  			
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