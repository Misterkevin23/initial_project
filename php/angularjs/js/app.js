// .module(arg1, arg2)
//arg1 : nom module
//arg2: tableau des dépendances (autres modules chargés)
var app = angular.module('introApp', []);

app.controller('mainCtrl', function($scope){
	$scope.message = "coucou";	//ajout d'une propriété nommée arbitrairement "message" 
	//à l'object $scope (espace d'échange entre la vue et le controleur)

	// variable non accessible à la vue
	var players = [
	{name: 'Chiellini', age:'58'},
	{name: 'Dybala', age:'21'},
	{name: 'Higuain', age:'29'}
	];

	$scope.joueurs= players; // nous exposons les joueurs, ils sont
	//accessibles à la vue
});