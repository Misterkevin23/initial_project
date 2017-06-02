<?php
include 'include/connexion_db.php';

$db = connect();

$query= $db ->prepare ('SELECT * FROM pays');

$query->execute();

$pays = $query-> fetchAll();

echo json_encode($pays);

?>