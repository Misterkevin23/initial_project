<?php
include 'includes/header.php';
include 'includes/menu.php';
/*** FONCTIONS ***/

	
//$allowed_tags = ['p', 'div', 'span', 'strong', 'em', 'h1', 'h2'];


//déclaration
function echOgmP($str){
	echo '<p>'.$str.'</p>';
}

function isTagAllowed($tag){
	$allowed_tags = ['p', 'div', 'span', 'strong', 'em', 'h1', 'h2'];
	//vérifie que le tag fait parties des tags autorisés

	$found_tag = false; //par défault, on considère que la balisze n'a pas été trouvé
	foreach($allowed_tags as $allowed){
		if($tag== $allowed){
			$found_tag = true; //tag trouvé dans le tableau
		}
	}
	return $found_tag;	// on retourne vrai ou faux
}

function echOgmTag ($str, $tag){
	
	//function qui affiche la chaine en entrée (argument 1)
	// compride entre d"but et fin d'une balise html fournie en entrée (argument 2)

	if(isTagAllowed($tag)){
		echo '<'.$tag.'>'.$str.'</'.$tag.'>';
	}
	else{
		echOgmP ('<span style="font-size:2em">Balise<strong style="color:red"> '.$tag.'</strong> non reconnue ou non permise</span>');
	}
	
}

//Invocation (appel)


echo 'Les fonctions sont nos amies!';
echo 'Les fonctions sont nos amies!';
echo 'Les fonctions sont nos amies!';


echOgmP('Les fonctions sont nos amies!');
echOgmP('Les fonctions sont nos amies!');
echOgmP('Les fonctions sont nos amies!');

echOgmTag('Les fonctions sont nos amies!','div');
echOgmTag('Les fonctions sont nos amies!','li');
echOgmTag('Les fonctions sont nos amies!', 'h2');

include 'includes/footer.php';
?>