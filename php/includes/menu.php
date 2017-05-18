<?php
	$menus=[
			['href'=>'index.php', 'label' => 'Accueil'],
			['href'=>'variables.php', 'label' => 'Variables'],
			['href'=>'boucle.php', 'label' => 'Boucle'],
			['href'=>'fonction.php', 'label' => 'Fonction'],
			['href'=>'get.php?country=italie&sport=football', 'label' => 'GET']
		];
?>

<nav>
	<ul class="list-inline">
		<?php foreach ($menus as $menu): ?>
			<li>
				<a href="<?php echo $menu['href']; ?>">
					<?php echo $menu['label']; ?> 
				</a>
			</li>

		<?php endforeach ?>	
	</ul>
</nav>	