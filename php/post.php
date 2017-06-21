<?php
// session_start();	//ouverture d'une session

include 'includes/util.inc.php';
include 'includes/header.php';
include 'includes/menu.php';

$_SESSION['test']='ca marche';

var_dump($_SESSION); //renvoie null si aucune session ouverte
//sinon renvoi tableau associatif(potentiellement vide)




?>

<h1>POST</h1>

<?php
// print_r($_POST);
$email=$_POST['email'];
$password=$_POST['password'];

if(isset($_POST['admin'])){
	$admin = $_POST['admin'];
}


/*if(isset($admin)){
	echOgmP('Bonjour $admin')
}
else{
	echOgmP('Bonjour cher client')
}*/

if ($email== "test@test.fr" && $password == 1234 && isset($admin)){
	echOgmP('Identification reussi');
	$_SESSION['logged']='admin';
	header('location:index.php');
}

	//Enregistrer cet état dans la session
else {
	echOgmP('L\'identification a échoue...');
}

?>

<?php include 'includes/footer.php'; ?>