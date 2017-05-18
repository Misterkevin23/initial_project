<?php
include 'includes/header.php';
include 'includes/menu.php';
?>

<h1>GET</h1>

<?php
// la supergrobale $_GET est un tableau associativef contenant les paramàtres
		echo '<p style="font-size:2em">Pays demandé: ' .$_GET['country']. '</p>';
		echo '<p style="font-size:2em">Sport demandé: ' .$_GET['sport']. '</p>';
?>

<?php include 'includes/footer.php'; ?>