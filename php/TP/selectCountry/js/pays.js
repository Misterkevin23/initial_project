var pays=null;
var country=[];

function displayTable(pays)
{
	var table = '';
	
	pays.forEach(function(nation)
	{
		country.push(nation.nom);
		table += '<table class="table" id="'+nation.nom+'">';
		table += '<tr><th>' + nation.nom + '</th><th> </th><th>DRAPEAU</th></tr>';
		table += '<tr>';
		table += '<td>Capitale: </td>';
		table += '<td>' + nation.capital + '</td>';
		table += '<td rowspan="4"><img src="' + nation.drapeaux + '"></td>';
		table += '</tr>';
		table += '<tr>';
		table += '<td>Nombre d\' habitants: </td>';
		table += '<td>' + nation.habitants + '</td>';
		table += '</tr>';
		table += '<tr>';
		table += '<td>Superficie: </td>';
		table += '<td>' + nation.superficie + ' km²</td>';
		table += '</tr>';
		table += '<tr>';
		table += '<td>Langue(s) parlée(s): </td>';
		table += '<td>' + nation.langues + '</td>';
		table += '</tr>';
		table += '</table>';
	});
	
	$('#info').html(table);
}

function select(country){
	$('#info').hide();
	$('select').change(function(){
		
		var nation= $('select').val();

		for(var i=0; i<country.length; i++){
			if(country[i]== nation)
			{
				$('#'+nation).show();
			}
			else
			{
				$('#'+country[i]).hide();
				$('#info').show();
			}
		}
	})
}

function getPays(){
	var url = 'http://localhost/initial_project/php/TP/selectCountry/ajaxPays.php';
	$.get(url, function(data){
	pays=JSON.parse(data);
	console.log(pays);
	displayTable(pays);
	console.log(country);
	select(country);
	});
}


getPays();





