<?php
include 'includes/util.inc.php';
include 'includes/header.php';
include 'includes/menu.php';
include 'includes/equipe.inc.php';


var_dump($_SESSION);

if(isset($_POST['input']) && isset($_FILES))
{
	$extension = substr($_FILES["logo"]["name"], -4);
	$conditions= 
		$_FILES["logo"]["size"] <500000 &&
		isFormatAllowed($extension);

//upload du fichier
	if($conditions)
	{

		$source=$_FILES["logo"]["tmp_name"];

	
		$destination='img/logo/'. rightFormat($_POST["nom"]).$extension;
		
		// déplacer le fichier de la zone temporaire vers son
		// emplacement "définitif" sur le serveur
		move_uploaded_file($source, $destination);
		
		$teams=$_POST; //copie $_POST dans $team;

		//on ajoute la clé 'logo' au tableau associatif $team
		$teams['logo'] = $destination;
	
		if (createTeam($teams))
		{
			// redirection
			header('location:equipes.php');
		}
		else
		{
			echo '<p class="text-warning">L\' engregistrement a échoué</p>';
		}
	}
	else
	{
	echoP("Fichier non autorisé ou trop lourd");	
	}
}
?>

<?php
// if(isset($_SESSION['logged'])){
if(isset($_SESSION['user']))
{
	if($_SESSION['user']['role']=='admin')
	{
	include 'includes/Forms/addTeam.inc.php';	
	}
	else
	{
		echOgmP('Droits insuffisants');
	}
	
}
else
{
	echOgmP('vous devez être connecté pour accéder à cette resource');
}

?>

<?php include 'includes/footer.php'; ?>