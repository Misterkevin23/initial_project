<h1>Enregister un joueur</h1>

<div class="container">	
	<form method="POST">
	  	<div class="row">
	  		<div class="col-md-4">
		  		<label>Nom</label>
				<input type="text" name="nom">
	  		</div>

	  		<div class="col-md-4">
	  			<label>Prénom</label>
				<input type="text" name="prenom">
	  		</div>

	  		<div class="col-md-4">
	  			<label>Age</label>
				<input type="text" name="age">
	  		</div>

	  	</div>

	  	<div class="row">
	  		<div class="col-md-6">
	  			<label>Numeros de maillot</label>
				<!-- <input type="text" name="numeros_maillot"> -->
				<select name="numeros_maillot">
					<?php
						for($i=1; $i<1000; $i++){
							echo '<option>'.$i.'</option>';
						}
					?>
				</select>
	  		</div>

	  		<div class="col-md-6">
	  			<label>Equipe</label>
	  			<?php echo selectFormat(getTeams()); ?>
	  			
	  		</div>

	  	</div>

	  	<div class="row">
	  		<div col-md-12>
	  		<input type="submit" name="input" value="Enregister">
	  		</div>

	  	</div>

	</form>

</div>