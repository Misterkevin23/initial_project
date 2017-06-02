<?php
include 'includes/connexion_db.php';

$db=connect();

$query = $db->prepare(
	'INSERT INTO joueur (nom, prenom, age, numeros_maillot, equipe)
	VALUES (:name, :firstname, :age, :maillot, :equipe)'
);

$result = $query->execute(array(
	':name'=>$_POST['nom'],
	':firstname'=>$_POST['prenom'],
	':age'=>$_POST['age'],
	':maillot'=>$_POST['maillot'],
	':equipe'=>$_POST['equipe']
));

echo $result;// renvoie le résultat de la requête sql (booléen)
//au client

?>
