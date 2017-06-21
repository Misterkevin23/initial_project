<?php
include 'includes/util.inc.php';
include 'includes/header.php';
include 'includes/menu.php';
include 'includes/equipe.inc.php';
$teams= getTeams();
?>

<h1>Equipe</h1>

<?php echo ''.tableFormat($teams).'';?>

<?php include 'includes/footer.php'; ?>