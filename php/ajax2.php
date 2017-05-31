<?php
	include 'includes/connexion_db.php';

	$db = connect();

	/*$query= $db ->prepare ('SELECT joueur.nom, joueur.prenom, joueur.age, joueur.equipe, joueur.numeros_maillot, equipe.nom AS equipe_nom FROM joueur, equipe WHERE joueur.equipe = equipe.id ');*/

	//nouvelle syntaxe pour la jointure 
	//-->INNER JOIN: jointure interne , restrictive. Elimine les lignes 
	// qui n'ont pas de correspondence dans l'autre table.
	// $query= $db ->prepare ('SELECT joueur.nom, joueur.prenom, joueur.age, joueur.equipe, joueur.numeros_maillot, equipe.nom AS equipe_nom
	// 	FROM joueur
	// 	INNER JOIN equipe
	// 	ON joueur.equipe = equipe.id ');


	//-->LEFT JOIN: jointure externe, ouverte. Inclut les lignes 
	//n'ayant pas de correspondance dans l'autre table (Colonnes manquantes remplies par NULL
	//ORDER BY permet d'ordonner les donnée en fonction d'un paramettre 
	//ASC classement ascendant
	//DESC classement dessendant
	$query= $db ->prepare ('SELECT joueur.nom, joueur.prenom, joueur.age, joueur.equipe, joueur.numeros_maillot, equipe.nom AS equipe_nom
		FROM joueur
		LEFT JOIN equipe
		ON joueur.equipe = equipe.id 
		ORDER BY joueur.age ASC, joueur.nom ASC    
		');
	$query->execute();

	$results = $query-> fetchAll();

	echo json_encode($results);

?>