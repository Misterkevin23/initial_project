<h1>Enregister une Equipe</h1>

<div class="container">	
 <!--enctype="multipart/form-data" pour envoyer des fichiers -->
	<form method="POST" enctype="multipart/form-data">
	  	<div class="row">
	  		<div class="col-md-4">
		  		<label>Nom</label>
				<input type="text" name="nom">
	  		</div>

	  		<div class="col-md-4">
	  			<label>Entraineur</label>
				<input type="text" name="entraineur">
	  		</div>

	  		<div class="col-md-4">
	  			<label>Couleur</label>
				<input type="text" name="couleurs">
	  		</div>

	  		<div class="col-md-6">
	  			<label>Logo</label>
				<input type="file" name="logo">
	  		</div>

	  	</div>

	  	
	  	<div class="row">
	  		<div col-md-12>
	  		<input type="submit" name="input" value="Enregister">
	  		</div>

	  	</div>

	</form>

</div>