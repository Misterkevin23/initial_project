<?php
	$title = "Formation PHP Aston";

	$connected=true;
?>



<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
<h1><?php echo $title; ?></h1>


<!-- Formulaire de connexion -->
<?php if($connected): ?>
<form method="POST" action="login.php">
<label style="color:green">Email:</label>
<input type="email" name="email" placeholder="Taper votre email">

<label style="color:yellow">Mot de passe:</label>
<input type="password" name="password">

<label style="color:red">Administrateur</label>
<input type="checkbox" name="admin">

<input type="submit" value=Valider style="border:7px black solid; background: green">
</form>
<?php endif ?>
<?php include 'includes/footer.php'; ?>