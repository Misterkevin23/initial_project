<?php
	$title = "Formation PHP Aston";

	$connected=true;
?>



<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
<h1><?php echo $title; ?></h1>


<!-- Formulaire de connexion -->
<?php if($connected): ?>
<form>
<label>Email:</label>
<input type="email" placeholder="Taper votre email">

<label>Mot de passe:</label>
<input type="password">

<button>Valider</button>
</form>
<?php endif ?>
<?php include 'includes/footer.php'; ?>