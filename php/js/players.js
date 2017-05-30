function test(){
	console.log('zepto fonctionne');
}

function getPlayers(){
	var url = 'http://localhost/projet/aston/php/ajax2.php';
	$.get(url, function(data){
		//data contiendra les données envoyées par le serveur
		
		var players=JSON.parse(data);
		displayTable(players);  // fonction responsable de l'affichage
		// d'un tableau de joueurs
	});
}

function displayTable(players){
	var table = '<table class=table>';
	//
	table += '<tr><th>NOM</th><th>PRENOM</th><th>AGE</th><th>NUMERO</th>';

	//boucle
	players.forEach(function(player){
		table += '<tr>';
		table += '<td>' + player.nom + '</td>';
		table += '<td>' + player.prenom + '</td>';
		table += '<td>' + player.age + '</td>';
		table += '<td>' +'( '+ player.numeros_maillot + ' )' + '</td>';
		table += '</tr>';
		


	});

	table += '</table>';

	$('#listPlayers').html(table);

}

$('#btn').on('click', test);

getPlayers(); //appel de la fonction au chargement de la page