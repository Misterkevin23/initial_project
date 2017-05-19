<?php
include 'includes/util.inc.php';
include 'includes/header.php';
include 'includes/menu.php';

if(isset($_GET['ageLimit'])){
	$ageLimit= $_GET['ageLimit'];
	if(strlen($ageLimit)>2){
		$ageLimit = 35;
	}
}	
//bibliothèque utilisée pour dialoguer à MySQL: PDO
//-->connexion à la base de données<---
$db = new PDO('mysql:host=localhost;dbname=formation-poec', 'root', '');

//***prépartation de la requête**** (lecture)
//prépartation de la requête avec un filtre (plusieurs filtre possible avec AND)
if (isset($ageLimit)){
	$query = $db->prepare('SELECT * FROM joueur WHERE age < '.$ageLimit);
}
else{
	$query = $db->prepare('SELECT * FROM joueur');
//Le parametres WHERE est retiré
}
//***exécution****
$query->execute(); //execute() renvoie vrai si réussite

//***récupération des données****

/*$data = $query ->fetch(); */
//extrait le premier element de l'objet
				//transforme les résultat du raw en une structure php =>tableau
/*$joueurs= $query ->fetchAll();*/ 
//extrait tous les elements du tableau

/*var_dump($datas);*/ 
//la function var_dump affiche la description détaillé (type et valeur de la variable fournie en entrée)
?>

<h1>Joueurs</h1>

<div>
	<form>
		<label>Limite d'age</label>
		<select name="ageLimit">
			<option value='20'>20</option>
			<option value='25'>25</option>
			<option value='30'>30</option>
			<option value='35'>35</option>
		</select>
		<input type="submit" value="Valider">
	</form>	
</div>
<table>
<?php
/*foreach($joueurs as $joueur){
	echo'<p>' . $joueur["prenom"] . ' ' . $joueur["nom"] . '</p>';
}*/

//La méthode fetch renvoi sous forme d'un tableau php la prochaine ligne (rows) sql non traité
//les lignes sql déjà traitées (fetched) ne sont plus dans l'objet $query
//fetch() renvoie false quand toutes les lignes sql ont été traitées

while($joueur = $query->fetch()){
//à chaque itération la variable $joueur reçoit le résultat de fetch() c'est-à-dire un tableau associatif contenant les données du joueur	
	echo '<tr>';
	echo'<td>' . $joueur["prenom"] . ' </td><td>' . $joueur["nom"] . '</td>';
	echo '</tr>';
}

?>
</table>
<?php include 'includes/footer.php'; ?>