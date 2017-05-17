<?php

echo '<li>bonjour</li>';
echo '<li>Au revoir</li>';
echo '<ul><li>Pomme</li>';
echo'</ul>';

$nb1= 7;

// stucture conditionnel
//  if 
if($nb1 > 10){
	if($nb1 > 1000){
		echo "<p>IMMENSE</p>";
	}
	else{
		echo "Il est vrai que " . $nb1 . " est superieur à 10";
	}

}
elseif($nb1 == 10){
	echo "Le nombre " . $nb1 . " est magique";

}
else{
	echo "Il est faux";
}

// if($nb1 > 1000){
// 	echo "<p>IMMENSE</p>";
// }
// else{
// 	echo '<p>' . $nb1 . " est un petit nombre</p>";
// }

$connected = true;

if($connected){
	echo "Vous êtes connecté"; //$connected ===true
}
if(!$connected) echo "Vous n'êtes pas connecté";  //$connected === false
if(!$nb1 == 10){
	// si $nb n'est pas égal (donc diff"rent à 10)
	// autre syntaxe possible: $nb !=10
}





?>
