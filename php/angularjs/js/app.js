// .module(arg1, arg2)
//arg1 : nom module
//arg2: tableau des dépendances (autres modules chargés)
var app = angular.module('introApp', []);

app.controller('mainCtrl', function($scope, $http){
	var url_server="http://localhost/projet/aston/php/poo/ajax.php";
	
	// $scope.updateMode est un indicateur permettant de savoir
    // si le formulaire doit être géré en mode insertion ou bien
    // en mode mise à jour
    $scope.updateMode = false; // mode insertion par défaut
    $scope.visibleForm=true;
	$scope.nb_click=0;
	$scope.orderKey = "age"; //critère de tri initial
	$scope.reverse = false; // par defaut, tri croissant (pas d'inversion)
	$scope.message = "coucou";	//ajout d'une propriété nommée arbitrairement "message" 
	//à l'object $scope (espace d'échange entre la vue et le controleur)
	$scope.maillot_range= [];//tableau destiné à alimenter le menu select
	//dans le formulaire d'ajout d'un joueur

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
		var url= url_server + "?action=list";
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

	function buildNumberList()
	{
		for (var i=1; i<1000; i++)
		{
			$scope.maillot_range.push(i);
		}
	}

	function initPlayer() {
        $scope.player = {
            nom: null,
            prenom: null,
            age: null,
            numeros_maillot: "1",
            equipe: "0"
        };
    }
	

	$scope.teams= equipes; // nous exposons les equipes:
	//elle deviennent accessibles à la vue via le scope

	$scope.changeOrder = function(key){
		$scope.orderKey = key;
		$scope.reverse= !$scope.reverse; //on inverse l'ordre du tri
	};

	$scope.savePlayer = function(){
		//requête ajax pour ajouter un joueur
		var url=url_server;
		$http.post(url, {player:$scope.player}).then(function(res){
			//rechargement des joueurs
			getPlayers();
			// efface formulaire et repasse en mode insertion
            $scope.clearForm();
		});
	};

	$scope.editPlayer = function() {
        $scope.player = this.g;
        $scope.updateMode = true;
    };

	$scope.deletePlayer = function() {
		//this retourne le "contexte" du bouton cliqué
		// on obtient ainsi les données incluses dans la même ligne (tr)
		//que le bonton cliqué
		//this.g (g est généré par le ng-repeat) retourne
		//les données du joueur que l'on veut supprimer
		var player_id = this.g.id;

		//requete ajax pour supprimer le joueur identifié
		var url=url_server + "?action=delete&id=" + player_id ;
		$http.get(url).then(function(res){
			//rechargement des joueurs
			getPlayers();
		});
	};

	$scope.clearForm = function() {
        initPlayer();
        $scope.updateMode = false;
    }


	//chargement des joueurs
	getPlayers();

	//construction de la liste des numéros de maillot
	buildNumberList();

	// initialisation du formulaire d'ajout de joueur
    initPlayer();

    //$scope.player = {nom: 'PIRES', prenom: 'Roberto'};


});