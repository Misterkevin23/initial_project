// alert('hello');
console.log('JS ok');

var list 		= document.getElementById('list');
var reset 		= document.getElementById('reset');
var ajax 		= document.getElementById('ajax');
var message 	="Bonjour à tous";
var nbClics		=0;

function test(){ console.log(message); }

function addLi(){
	//createElement genere une balise HTML
	if (nbClics < 5){
		var li= document.createElement('li');
		li.innerText = message; 
		list.appendChild(li);
		nbClics++; //incrémentation du nombre de clics
	}
}

function addLi2(text){
	//createElement genere une balise HTML
	if (nbClics < 5){
		var li= document.createElement('li');
		li.innerText = text; 
		list.appendChild(li);
		nbClics++; //incrémentation du nombre de clics
	}
}

function emptyList(){
	// list.removeChild(list.firstChild); supprime le premier enfant de la list
	//list.innerHTML='';
	while (list.firstChild) {	//tant que la list a un enfant
		list.removeChild(list.firstChild);
		nbClics--;
	}
}

function getData(){
	console.log('Requête ajax');
	var url = 'http://localhost/projet/aston/php/ajax.php';
	var req = new XMLHttpRequest(); 
	req.open('GET', url, false);
	req.send(null); // Aucune donnée suplémentaire n'est demandée

	if (req.status==200){
		//instruction à éxécuter en cas de succès
		// console.log('réponse du serveur:'+req.responseText);
		var res = req.responseText;
		console.log(typeof res); // renvoie string
		console.log(res[0]); // ne renvoie pas Chiellini" mais "["

		var resArray= JSON.parse(res);
		console.log(resArray);
		console.log(typeof resArray);	// renvoie objzct (structure objet JS)
		console.log(resArray[0]);	//renvoie Chiellini

		addLi2(resArray[1]);
	}
	else{

	}
}

document
	.getElementById('btn')
	.addEventListener('click', addLi);
// $('btn').click(test);

reset.addEventListener('click', emptyList);
ajax.addEventListener('click', getData);