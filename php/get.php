<?php
include 'includes/util.inc.php';
include 'includes/header.php';
include 'includes/menu.php';
?>

<h1 style="background:black; color:white; border-radius:30px">GET</h1>

<?php
// la supergrobale $_GET est un tableau associativef contenant les paramàtres
$country = $_GET['country'];
$sport=$_GET['sport'];
	
echOgmP ('Pays demandé: ' .$country);
echOgmP ('Sport demandé: ' .$sport);

switch (strtolower($country)) {
	case 'italie':
		echo "Siamo molto felici di imparare il PHP";
		//include strtolower($country).'.php';
		include 'italie.php';
		break;

	case 'france':
		echo "Nous sommes très heureux d'apprendre le PHP";
		break;

	case 'roumanie':
		echo "Suntem foarte fericiti sa invatem PHP-ul";
		break;

	case 'espagne':
		echo "Estamos muy felices de apprender el PHP";
		break;			
	
	default:
		echo "pays inconnu";
		break;
}
	
?>

<?php include 'includes/footer.php'; ?>