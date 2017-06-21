<?php
include 'poo/classes/PlayerManager.class.php';

include 'includes/util.inc.php';
include 'includes/header.php';
include 'includes/menu.php';
include 'includes/equipe.inc.php';

if(isset($_GET['ageLimit'])){
	$ageLimit= $_GET['ageLimit'];
	if(strlen($ageLimit)>2){
		$ageLimit = 35;
	}
}	

/*$db = new PDO('mysql:host=localhost;dbname=formation-poec', 'root', '');

if (isset($ageLimit)){
	$query = $db->prepare('SELECT * FROM joueur WHERE age < '.$ageLimit);
}
else{
	$query = $db->prepare('SELECT * FROM joueur');

}

$query->execute(); */

$pm = new PlayerManager();

if (isset($ageLimit))
{
	$query = $pm->getListFilteredByAge($ageLimit);
}
else
{
	$query = $pm->getList();
}

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
<table class="equipe">

<?php
$output='';
$i=0;
while($joueur = $query->fetch()){
	$i++;

	$numeros=$joueur["numeros_maillot"];
	$output.= '<tr>';
	$output.='<td>' . $joueur["prenom"] . ' ' . '  </td><td>'.' ' . $joueur["nom"] .'</td>';
	$condition = $numeros > 0 && $numeros < 1000;
	if ($condition) {
		$output.='<td> ' . ' (' . $numeros . ')</td>';
	}
	else{
		$output.='<td></td>';
	}

	
	// var_dump(getTeamById($joueur["equipe"]));
	$team = getTeamById($joueur["equipe"]);

	if($team == false){
		$output.='<td>Equipe:Retraité</td>';
	}
	else{
		// $output.='<td>Equipe:'.$team['nom'].'<td>';
		$output.='<td><img src="'.$team['logo'].'"></td>';
	}

	$output.= '<td><a class="btn-primary btn-xs" href="updatePlayer.php?id='.$joueur["id"].'"> Modifier</a></td>';
	$output.= '<td><a class="btn btn-danger btn-xs" href="deletePlayer.php?id='.$joueur["id"].'"> Supprimer</a></td>';
	$output.= '</tr>';
}
	echo '<p>Nombre de résultats:'.$i.'</p>';
	echo $output;
?>

</table>
<?php include 'includes/footer.php'; ?>