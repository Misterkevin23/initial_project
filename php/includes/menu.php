<?php
include_once 'includes/access.inc.php';
$base = 'http://localhost/projet/aston/php/'; //url de base pour créer des liens absolus
	$menus=[
			['href'=>'index.php', 'label' => 'Accueil'],
			['href'=>'variables.php', 'label' => 'Variables'],
			['href'=>'boucle.php', 'label' => 'Boucle'],
			['href'=>'fonction.php', 'label' => 'Fonction'],
			['href'=>'get.php?country=italie&sport=football', 'label' => 'GET'],
			['href'=>'joueurs.php', 'label' => 'Joueurs (PHP)'],
			['href'=>'players.php', 'label' => 'Joueurs (ajax)'],
			['href'=>'angularjs/index.php', 'label' => 'Angular'],
			['href'=>'equipes.php', 'label' => 'Equipes'],
			['href'=>'addPlayer.php', 'label' => 'Ajouter un joueur'],
			['href'=>'addTeam.php', 'label' => 'Ajouter une équipe']
		];
?>

<nav>
	<ul class="list-inline">
		<?php foreach ($menus as $menu): ?>
			<li>
				<a href="<?php echo $base.$menu['href']; ?>">
					<?php echo $menu['label']; ?> 
				</a>
			</li>
		<?php endforeach ?>	
			<?php
			if (isLogged())
			{
				echo '<li><a href="logout.php">Déconnexion</a></li>';
			}
			?>
	</ul>
</nav>	