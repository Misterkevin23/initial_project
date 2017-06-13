 <?php

include 'classes/PlayerManager.class.php';
include_once 'classes/Player.class.php';

$pm= new PlayerManager();
$joueur= $pm->getListFetched();

$donnees =[
	'nom' 				=> 'Nedved',
	'prenom' 			=> 'Pavel',
	'age' 				=> 45,
	'numeros_maillot' 	=> 6,
	'equipe' 			=> 6
];

$player= new Player($donnees);
/*if($player->save())
{
	echo 'joueur enregistré en base de données';
}
else
{
	echo 'bouuuuuuhhhhhhhhhhhhh';
}*/

$player2= $pm->getById(4);
$player2->numeros_maillot = 26;

if($player2->update())
{
	echo 'la mise à jour a été effectué!';
}
else
{
	echo 'Juvvvvvvvvvvvvvvv';
}




 ?>