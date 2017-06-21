<?php
$players = ['Chiellini', 'Benatia', 'Rincon'];

//Tableau associatif
$bonucci1 = [
	'path'=> 'img/joueurs/bonucci1.jpg',
	'caption' => 'bonucci posant pour la pub meetic',
	'alt' => 'pose pour une pub'
];

$bonucci2 = [
	'path'=> 'img/joueurs/bonucci2.jpg',
	'caption' => 'bonucci célébrant un but',
	'alt' => 'célébration'
];

$bonucci3 = [
	'path'=> 'img/joueurs/bonucci3.jpg',
	'caption' => 'bonucci fétant la victoire avec un autre joueur',
	'alt' => 'victoire'
];

$joueur = [
	'nom' => 'Bonucci',
	'prenom' => 'Leonardo',
	'age' => 29,
	'numero' => 19,
	'club' => 'Juventus',
	'international' => true,
	'photos' => ['bonucci1', 'bonucci2', 'bonucci3'],
	'photo2' => [$bonucci1, $bonucci2, $bonucci3]
];

//print_r($players); //retourne une chaine de caractère (pas un tableau!):
//Array ( [0] => Chiellini [1] => Benatia [2] => Rincon )

echo json_encode($players); // envoie au client les données (le tableau) au format JSON ( format d'échange de données)

?>