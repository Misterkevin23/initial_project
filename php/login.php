<?php
include 'includes/util.inc.php';
include 'includes/connexion_db.php';
include 'includes/header.php';
include 'includes/menu.php';


if (isset($_POST['email']) && isset($_POST['password']))
{
	$email= $_POST['email'];
	$pass= $_POST['password'];

	//connexion à mysql, requête et execution

	$db= connect();
	$query= $db->prepare(
		'SELECT * FROM users WHERE email = :email AND password = :password'
	);

	$query->execute(array(
		':email' 	=>$email,
		'password'	=>$pass
	));

	$result = $query->fetch();

	if($result)
	{//si result est différent de false
	//on enregistre l'utilisateur dans la session	
		$_SESSION['user']= $result;
		header('location:index.php');
	}
	else
	{
		echOgmP('Utilisateur/trice non reconnu(e)');
	}

}
else
{
echOgmP('Formulaire non validé');
}
?>

<?php include 'includes/footer.php'; ?>