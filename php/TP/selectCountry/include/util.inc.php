<?php

function echOgmP($str){
	echo '<p style="font-size:1.3em; font-familly:Verdana;">'.$str.'</p>';
}

function isFormatAllowed($format){
	//formats de fichier autorisés
	$formats_allowed= ['.png', '.jpg', '.gif'];

	foreach ($formats_allowed as $format_allowed){
		if($format_allowed == $format){
			$isAllowed=TRUE;
		}
	}

	return $isAllowed;
}

function rightFormat($string){

	$format='';

	///suppression des espaces en debut et fin de chaine
	$newFormat= trim($string);

	//passage à la minuscule
	$newFormat= strtolower($string);

	//remplacement de l'espace par un tiret
	$newFormat = str_replace(' ','-',$newFormat);
	
	return $newFormat;
}
?>