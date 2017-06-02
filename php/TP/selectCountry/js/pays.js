var pays=null;

function getPays(){
	var url = 'http://localhost/projet/aston/php/TP/selectCountry/ajaxPays.php';
	$.get(url, function(data){
	pays=JSON.parse(data);
	console.log(pays);
	displayTable(pays);
	});
}
getPays();

function displayTable(pays)
{
	var table = '<table class=table>';
	//

	pays.forEach(function(nation)
	{
		table += '<tr><th>' + nation.nom + '</th><th> </th><th>DRAPEAU</th></tr>';
		table += '<tr>';
		table += '<td>Capitale: </td>';
		table += '<td>' + nation.capital + '</td>';
		table += '<td rowspan="4"> Drapeaux</td>';
		table += '</tr>';
		table += '<tr>';
		table += '<td>Nombre d\' habitants: </td>';
		table += '<td>' + nation.habitants + '</td>';
		table += '</tr>';
		table += '<tr>';
		table += '<td>Superficie: </td>';
		table += '<td>' + nation.superficie + '</td>';
		table += '</tr>';
		table += '<tr>';
		table += '<td>Langue(s) parlée(s): </td>';
		table += '<td>' + nation.langues + '</td>';
		table += '</tr>';
	});

	table += '</table>';

	$('#info').html(table);

}



