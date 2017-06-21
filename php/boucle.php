<?php
include 'includes/header.php';
include 'includes/menu.php';
//*** boucles ***
//FOR

for($i=0; $i<10; $i++){
	echo '<p>' .$i. '</p>';
}

//WHILE

$i = 0; // variable servant

while($i < 5){
	echo '<p>' . $i. '</p>';
	$i++;
}

//FOREACH
//boucle idéale pour parcourir un tableau

$mois = ["janvier","février","mars"];

	//la variable $m est automatiquement assignée
	//à chaqaue itération, elle correspondra tour à tour, à chaque
	// valeur contenu dans le tableau 
echo "<select>";
foreach($mois as $m){
echo"<option>".$m."</option>";
}
echo "</select>";

// avec for
// for ($i=0; $i<4; $i++){
// 	echo "<option>" . $mois[$i] . "</option>";
// }

// echo "</select>";


$animaux = ["aigle", "cerf", "loups", "tortue", "toukan"];
$width = 200;
$i = 1;
foreach ($animaux as $animal) {
	echo '<div><img style="width:'. $width*$i . 'px; border:20px green solid" src="img/' . $animal . '.jpg"></div>';
	$i++;
}

// echo '<script src="js/script.js"></script>';

//Exo
//Afficher deux autre photo
//afficher une bordure coloré autour des immge

include 'includes/footer.php';

?>
