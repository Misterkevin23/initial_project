// .module(arg1, arg2)
//arg1 : nom module
//arg2: tableau des dépendances (autres modules chargés)
var app = angular.module('introApp', []);

app.controller('mainCtrl', function($scope, $http){
	$scope.nb_click=0;
	$scope.orderKey = "age"; //critère de tri initial
	$scope.reverse = false; // par defaut, tri croissant (pas d'inversion)
	$scope.message = "coucou";	//ajout d'une propriété nommée arbitrairement "message" 
	//à l'object $scope (espace d'échange entre la vue et le controleur)

	// variable non accessible à la vue
	var equipes = [
	{name: 'Juventus'},
	{name: 'PSG'},
	{name: 'Strasbourg'},
	{name: 'Milan AC'},
	{name: 'Monaco'},
	{name: 'Benfica'},
	{name: 'Bordeaux'},
	{name: 'Olympique Lyonnais'},
	{name: 'Furious Crew'}
	];

	function getPlayers(){
		// requête ajax via le service $http
		var url= "http://localhost/projet/aston/php/ajax2.php";
		$http.get(url).then(function(res){
			$scope.giocatori = res.data;

			//modification de la source de données en
			//fonction d'une condition
			//si joueur sans équipe, on modifie sa propriéé "equipe_nom"
			
			/*$scope.giocatori.forEach(function(joueur){
				if(joueur.equipe == 0){
					joueur.equipe_nom = "sans equipe";
				}
			});*/

		});	
	}

	

	$scope.teams= equipes; // nous exposons les equipes:
	//elle deviennent accessibles à la vue via le scope

	$scope.changeOrder = function(key){
		$scope.orderKey = key;
		$scope.reverse= !$scope.reverse; //on inverse l'ordre du tri
	}

	$scope.deletePlayer = function() {
		//this retourne le "contexte" du bouton cliqué
		// on obtient ainsi les données incluses dans la même ligne (tr)
		//que le bonton cliqué
		//this.g (g est généré par le ng-repeat) retourne
		//les données du joueur que l'on veut supprimer
		var playerId = this.g.id;

		//requete ajax pour supprimer le joueur identifié
		var url="http://localhost/projet/aston/php/deleteplayer.php?id=" + playerId + "&ajax=true";
		$http.get(url).then(function(res){
			//rechargement des joueurs
			getPlayers();
		});
	};

	//chargement des joueurs
	getPlayers();

});