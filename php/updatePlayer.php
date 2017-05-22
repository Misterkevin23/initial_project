<?php
include 'includes/connexion_db.php'; // fournit connnect();
include 'includes/util.inc.php';
include 'includes/header.php';
include 'includes/menu.php';

//Récuperation de l'identifiant du joueur
if(isset($_GET["id"])){
	$id=$_GET["id"];

//1) connexion
	$db= connect();

//2) requete
	$query = $db -> prepare('SELECT * FROM joueur WHERE id= :id');

//3) execution
	$query-> execute(array(
		':id'=>$id
	));

//4) fetch

	$joueur = $query->fetch(); //un seul résultat attendu, donc 1 seul fetch
	// var_dump($query);	
}

//mise à jour de la table joueur

if(isset($_POST["input"])){
//Le bouton "Mettre à jour" a été cliqué
// si la connection n'existe pas, on DOIS l'initialiser avant l'étape de requête
	if(!isset($db)) {
		$db = connect();

	}
	$query=$db->prepare('UPDATE joueur SET prenom = :prenom, nom = :nom, age = :age, numeros_maillot = :numeros_maillot WHERE id = :id');

	$query-> execute(array(
		':prenom'=>			$_POST["prenom"],
		':nom'=>			$_POST["nom"],
		':age'=>			$_POST["age"],
		':numeros_maillot'=>$_POST["numeros_maillot"],
		':id'=>				$_POST["id"]
		));

	//redirection vers la liste des joueurs
	header('location:joueurs.php');
}


?>
<form method="POST">
<label>Nom</label>
<input 
	type="text"
 	name="nom"
 	value="<?php echo $joueur['nom']?>">

	<label>Prénom</label>
	<input 
	type="text" 
	name="prenom"
	value="<?php echo $joueur['prenom']?>">

	<label>Age</label>
	<input
	 type="text"
	 name="age"
	 value="<?php echo $joueur['age']?>" >

	<label>Numeros de maillot</label>
	<!-- <input type="text" name="numeros_maillot"> -->
	<select 
	name="numeros_maillot">
		<?php
			for($i=1; $i<1000; $i++){
				if ($i == $joueur['numeros_maillot']){
					echo '<option selected>'.$i.'</option>';
				}
				else{				
					echo '<option>'.$i.'</option>';
				}
			}
		?>
	</select> 
	<br><input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
	
	<input type="submit" name="input" value="Mettre à jour">
</form>


<?php include 'includes/footer.php'; ?>