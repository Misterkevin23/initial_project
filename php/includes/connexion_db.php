<?php
// 1) Connexion
function connect(){
	$db = new PDO('mysql:host=localhost;dbname=formation-poec', 'root', '');
	return $db;
}

?>