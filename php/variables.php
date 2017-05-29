<?php
include 'includes/header.php';
include 'includes/menu.php';



// Variables
// En php, on ne déclare pas le type (entier, chaine) de variable

//***Types simples ***
$message = "Le pHp c'est magique";
echo $message;

$nb1 = -7; // number
$nb2 = 2.3; //number
$resultat = $nb1 * $nb2;

$actif = true; //boolean

$utilisateur = null; // null, ideal comme valeur temporaire

// Concaténation
echo '<p>' . $resultat . '<p>';
echo '<p> le resultat à ' .$nb1 . ' * ' . $nb2 .' = <strong>' . $resultat .'</strong></p>';


//*** Types complexes ***/
//tableau à indice numérique (premier élément a partir de 0)
$nombres = [4, 7, 569, 12];
$joueurs = ["Bonucci", "Barzagli", "Chiellini"];
$mix = ["Buffon", 1, true];

echo $nombres[3]; // renvoie 12

echo "<p>".$joueurs[0]."</p>"; // renvoie Bonucci

$mix[2]= false; // écrase (écrit) la valeur précédente située à l'indice 2 du tableau

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

echo '<h2 style="font-size:2em">'.$joueur['prenom']. ' ' .$joueur['nom'] . '</h2>'; // Renvoi Leonardo Bonucci
echo '<p style="font-size:1em; font-weight:bold">'.$joueur['photos'][0].'</p>';

/*foreach ($joueur['photos'] as $photo){
	echo '<div><img src="img/joueurs/' . $photo. '.jpg" style="width:300px; border:3px green dotted; margin:7px"></div>';
}*/

echo '<table class="table table-striped">';

	
	foreach($joueur['photo2'] as $photo) {
	echo '<tr>';
	echo '<td><img style="width:300px; height:300px; border:7px blue dotted" src="'.$photo['path'].'"></td>';
	echo '<td><span style="font-size:2em">'.$photo['caption'].'</span></td>';
	echo '</tr>';
}

echo '</table>';


include 'includes/footer.php';
?>

