<!DOCTYPE html>
<html ng-app="introApp">
<head>
	<title>Angulars JS Intro</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<style>
		th{
			cursor:pointer;
		}
		table img{
			width: 40px;
		}
	</style>	
</head>
<body>
	<?php 
	include '../includes/equipe.inc.php';
	include '../includes/menu.php'; 
	?>

	<h1>Angulars JS Intro</h1>

	<div ng-controller="mainCtrl">

<!-- formulaire d'ajout/mise à jour d'un joueur -->
	<div class="well">
		<input ng-model="team.nom" type="text" placeholder="Nom">
		<input ng-model="team.prenom" type="text" placeholder="Prénom">
		<input ng-model="team.age" type="text" placeholder="Age">
		<label>Numeros</label>
		<select ng-model="team.numeros_maillot">
			<option ng-repeat="n in maillot_range">{{n}}</option>
		</select>

		<label>Equipe</label>
		<?php echo selectFormat(getTeams()); ?>

		<button ng-click="savePlayer()" class="btn btn-primary btn-xs">Enregistrer</button>
		<span id="message"></span>
	</div>

<!--filtre-->
	<div>
		<!-- ng-model surveille la valeur d'un input et la range dans le scope-->
		<input ng-model="search" type="text" placeholder="Recherche">
		<select ng-model="selectedTeam">
			<option ng-repeat="team in teams">{{team.name}}</option>
		</select>
	</div>

	<div ng-hide="true">
		<button ng-click="nb_click = nb_click + 1 ">
		Click
		</button> {{nb_click}}
	</div>

	{{filteredGiocatori.length}}/{{giocatori.length}}

	<table class="table table-striped">
		<tr>
			<th ng-click="changeOrder('nom')">Nom</th>
			<th ng-click="changeOrder('prenom')">Prenom</th>
			<th ng-click="changeOrder('age')">Age</th>
			<th ng-click="changeOrder('numeros_maillot')">Numero</th>
			<th ng-click="changeOrder('equipe_nom')">Equipe</th>
			<th>Logo Equipe</th>
			<th>Actions</th>
		</tr>


		<tr ng-repeat="g in filteredGiocatori=(giocatori |
		 filter: search | filter: selectedTeam |
		 orderBy:orderKey:reverse)">
			<td>{{g.nom}}</td>
			<td>{{g.prenom}}</td>
			<td>{{g.age}}</td>
			<td>{{g.numeros_maillot}}</td>
			<td>{{g.equipe_nom}}</td>
			<td><img Ng-src="../{{g.equipe_logo}}"></td>
			<td>
			<button ng-click="deletePlayer()" class="btn btn-danger btn-xs">Supprimer</button>
			</td>

				<span ng-if="g.equipe != 0">{{g.equipe_nom}}</span>
				<span ng-if="g.equipe == 0">Pole Emploi</span>

		</tr>
	</table>		
		
	</div>
	<script src="js/angular.min.js"></script>
	<script src="js/app.js"></script>
	<!-- <script src="js/app_v1.js"></script> -->
</body>
</html>