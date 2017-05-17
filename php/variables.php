<!-- Variables
 En php, on ne déclare pas le type (entier, chaine) de variable -->

<?php

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
//tableau
$nombres = [4, 7, 569, 12];
$joueurs = ["Bonucci", "Barzagli", "Chiellini"];
$mix = ["Buffon", 1, true];

echo $nombres[3]; // renvoie 12

echo "<p>".$joueurs[0]."</p>";

?>

