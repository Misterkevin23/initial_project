<?php

function add ($nb1, $nb2) {
	return $nb1 + $nb2;
}

function multiply ($nb1, $nb2){
	return $nb1 * $nb2;
}

//echo add (4, 12) . '<br>' . multiply(5, 3);

//***exercice**
//Créer une classe Maths avec ls caracteristiques suivantes:
// -constructeur recevant deux paramètres (valeurs numériques)
//propriétés: nb1, nb2
//méthodes: add et multiply
//les méthodes renverront l'addition ou le produit
//des deux propriétés de cette classe

include 'classes/Math.class.php';

$multi= new Maths(5, 6);
echo $multi->add();
echo $multi->multiply();
echo $multi->substract(8,9);
echo $multi->substract(90,60);

?>