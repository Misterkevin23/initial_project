<?php
function getCountry(){
	$db=connect();
	$query=$db -> prepare('SELECT * FROM pays');
	$query->execute();
	return $query->fetchAll();
}

function selectFormat($word){
	$output = '<select name="pays">';
	foreach($word as $country){
		$output .='<option value="'.$country['nom'].'">'.$country['nom'].'</option>';
	}
	$output .= '</select>';

	return $output;
}
?>