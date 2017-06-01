//source de données globale (toutes les fonction y ont accès)
var players= null;
var ageAsc=false; //booléen permetant de savoir si les joueurs sont triés par age ascendant
var nomAsc= true;
var filterAge = null;

function getPlayers(){
	var url = 'http://localhost/projet/aston/php/ajax2.php';
	$.get(url, function(data){
		//data contiendra les données envoyées par le serveur
		
		players=JSON.parse(data);
		displayTable(players);  // fonction responsable de l'affichage
		//d'un tableau de joueurs
		console.log(_.max(getAges()));
	});
}

function displayTable(players)
{
	var table = '<table class=table>';
	//
	table += '<tr><th id="nomHeader">NOM</th><th>PRENOM</th><th id="ageHeader">AGE</th><th>NUMERO</th><th>EQUIPE</th>';

	var oldest= _.max(getAges())
	console.log(oldest);
	//boucle
	players.forEach(function(player)
	{
		table += '<tr>';
		table += '<td>' + player.nom + '</td>';
		table += '<td>' + player.prenom + '</td>';
		
		if(player.age==oldest)
		{
			table += '<td class="oldest">' + player.age + '</td>';
		}
		else
		{
			table += '<td>' + player.age + '</td>';
		}
		
		
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
			//row.hide(); // erreur: row.hide is not a function

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

function getAges(){
	var ages = []; //on initialise un tableau vide

	players.forEach(function(player){
		ages.push(player.age);
	})

	return ages; //on retourne le tableau des ages
}

function getFormValues(form){
	
	//récupère tous les inputs placées
	//dans le formulaire fourni en entrée
	var inputs 		= form.children('input');
	
	var nom 		= inputs.eq(0).val();
	var prenom 		= inputs.eq(1).val();
	var age 		= inputs.eq(2).val();
//renvoi un tableau de deux balises select
	var selects		=form.children('select');
	
	var maillot 	=selects.eq(0).val();
	var equipe 	=selects.eq(1).val();

	// console.log(nom + ' ' + prenom + ' ' + maillot);

	//création d'un objet values
	//permettrant de stocker toutes les valeurs 
	// à transmettre au serveur
	values= {
		nom: nom,
		prenom: prenom,
		age: age,
		maillot: maillot,
		equipe: equipe
	};

	return values;
}

getPlayers(); //appel de la fonction au chargement du script

$('#selectAge').on('change', function(){
	//.val() recupère la valeur de l'élément du formulaire(select)
	filterAge = $(this).val();	
	console.log('age sélectionné: '+ filterAge);
	hidePlayers(filterAge);
	//si variable filterAge different de null, false ou undefined
	if (filterAge)
	{
		hidePlayers(filterAge); //on masque les joueur dont l'age
		// est superieur à la valeur stockéé dans le filterAge
	}
});

//Lorsque l'élément #ageHeader EXiSTERA dans le dom, JS placera
//un écouteur d'événement click dessus

$(document).on('click', '#ageHeader', function(){

	if (ageAsc)
	{
		var sortedPlayers = _.reverse(_.sortBy(players, ['age']));
	}
	else
	{
		
		var sortedPlayers = _.sortBy(players, ['age']);
	}
	ageAsc = !ageAsc; //true devient false ou false devient true
	displayTable(sortedPlayers);
	//si variable filterAge different de null, false ou undefined
	if (filterAge)
	{
		hidePlayers(filterAge); //on masque les joueur dont l'age
		// est superieur à la valeur stockéé dans le filterAge
	}
})

$(document).on('click', '#nomHeader', function(){

	if (nomAsc)
	{
		var sortedPlayers = _.reverse(_.sortBy(players, ['nom']));
	}
	else
	{
		
		var sortedPlayers = _.sortBy(players, ['nom']);
	}
	nomAsc = !nomAsc; //true devient false ou false devient true
	displayTable(sortedPlayers);
})

$('#displayFormPlayer').on('click', function(){
	var text = "le formulaire pour ajouter un joueur"; 
	// $('#formPlayer').toggle();
	var form = $(this).next()
	form.toggle();	// ciblage relatif moin couteux pour JS

	//changer le texte du lien en fonction de la visibilité du formulaire
	var status = form.css('display');
	if (status == 'none')
	{
		$(this).text('Afficher ' + text);
	}
	else
	{
		$(this).text('Masquer ' + text);
	}
})

$('#formPlayer button').on('click',function(){
	console.log('ok');
});

$('#formPlayer button').on('click', function(){
	var form = $('#formPlayer');
	
	//création d'un objet player à partir des valeurs récupérées dans le formulaire 
	var player = getFormValues(form);

	//requête ajax en post
	var url = 'http://localhost/projet/aston/php/ajaxAddPlayer.php';
	$.post(url, player, function(data){
		console.log(data);
	});
})

//Lodash: exemples
/*var notes = [7, 23, 42, 3];
var max = _.max(notes);
var min = _.min(notes);

console.log (max);
console.log (min);
*/
