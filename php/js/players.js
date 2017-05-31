//source de données globale (toutes les fonction y ont accès)
var players= null; 
console.log(players);
function getPlayers(){
	var url = 'http://localhost/projet/aston/php/ajax2.php';
	$.get(url, function(data){
		//data contiendra les données envoyées par le serveur
		
		players=JSON.parse(data);
		displayTable(players);  // fonction responsable de l'affichage
		// d'un tableau de joueurs
		$('#ageHeader').on('click', function(){
			
		})

	});
	console.log(players);
}

function displayTable(players)
{
	var table = '<table class=table>';
	//
	table += '<tr><th>NOM</th><th>PRENOM</th><th id="ageHeader">AGE</th><th>NUMERO</th><th>EQUIPE</th>';

	//boucle
	players.forEach(function(player)
	{
		table += '<tr>';
		table += '<td>' + player.nom + '</td>';
		table += '<td>' + player.prenom + '</td>';
		table += '<td>' + player.age + '</td>';
		table += '<td>' +'( '+ player.numeros_maillot + ' )' + '</td>';
		
		if(player.equipe_nom == null)
		{
			table += '<td>Sans équipe</td>';
		}
		else
		{
			table += '<td>' + player.equipe_nom + '</td>';
		}

		table += '</tr>';
		
	});

	table += '</table>';

	$('#listPlayers').html(table);

}

function hidePlayers(ageLimit){
	var nbResults = 0;
	var rows= $('table tr');
	$.each(rows, function(index, row){
			//row.hide(); // eurreur: row.hide is not a function

			//on cible la ligne par zepto afin "d'envelopper" l'element
			//de nouvelles capacités (propriétés et méthodes)
		var r=$(row);						
		var age = r.children().eq(2).text();


		if (age > ageLimit && index != 0) {
			r.hide();
		}
		else{
			r.show();
			nbResults++;
		}	

	});
	$('#nbResults').html(nbResults-1);
}

getPlayers(); //appel de la fonction au chargement du script

$('#selectAge').on('change', function(){
	//.val() recupère la valeur de l'élément du formulaire(select)
	var age = $(this).val();	
	console.log('age sélectionné: '+ age);
	hidePlayers(age);
});

var notes = [7, 23, 42, 3];
var max = _.max(notes);
var min = _.min(notes);

console.log (max);
console.log (min);

