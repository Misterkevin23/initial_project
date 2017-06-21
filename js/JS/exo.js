var nombre=5;

var i=0;
for(var i; i<nombre; i++){
	console.log("ma boucle for " + i + " fois");
}

var i=0;
while(i<nombre){
	console.log("ma while " + i + " fois" );
	i=i+1;
}

var j=0;
do{
	console.log("ma do while " + j + " fois");
	j++;
} while (j < nombre)

//---------------------

var tab=[]
tab=["moussa","kevin","pierre","paul","jacques"]
console.log(tab);
console.log("");

var i=0;
for(var tab; i<tab.length; i++){
	if (tab[i]=!"kevin"){
		console.log("pas de kevin")
	}
	else {
		console.log("bonjour, " + tab[1]);
		console.log("");
		break;
		}
}

alert("Et avec while?")

var i=0
while(i<tab.length){
	if(tab[i]==="kevin"){
		console.log("bonjour, " + tab[1]);
		console.log("");
		break;
	}
	else{
		console.log("Mais nan, c'est "+ tab[i] );
		i++
	}
}

/*function estPremier(){
	var nombre=promp("Entrez un nombre")
		for (var i=2; i<nombre; i++){
			if(nombre%i===0){
				console.log("le nombre" + nombre + "n'est pas un nombre premier car il est divisible par " + i );
				break;
			}
			console.log(nombre + " est un nombre premier")
			break;
		}
}*/			



/*var nombre=prompt("entrer un nombre: ");
nombre=parseInt(nombre);
if(nombre%1!=0){
	console.log("LE NOMBRE EST DIVISIBLE PAR 1)
	for(var i=2; i<=nombre; i++ ){
		if(nombre% === 0){
			console.log("LE NOMBRE EST DIVISIBLE PAR " + a)
			}
		}	
	}
	
	else
}
else{
	console.log("nan car il divisible par 2")
}*/

// ------------------

function estaddition(a,b,c,d){
		var test=soustraction(a,b,7,9);
		console.log(test);

	return test+a+b;
}

// ------------------

var estMultiplication = function (a,b,c,d){
	if((a!=0)||(b!=0)||(c!=0)||(d!=0)){
	return a*b*c*d;
	}
	else{
		console.log("multiplier par 0 donne 0")
	}
}

// ------------------

var estPremier = function (nombre){
	for (var i = 2; i < nombre; i++) { 
		if (nombre % i === 0) {
			 console.log(nombre+ "n\' est pas premier car il est")
		  return false
		}
	}
	console.log(nombre + "est un nombre premier")

	return true
}		

// ------------------

var estSoustraction= function(a,b,c,d){
	return a-b-c-d;
}

// ------------------

var estDivision = function(a,b){
	if (b!=0){
	return a/b;
	}
}

// var tab=["moussa", "kevin", "marc"];
// 	}
// }
// var admis;
// var user=[ {nom:"Moussa" moyenne:8 admis:false}, {nom:"kevin" moyenne:15 admis:false}, {nom:"Moussa" moyenne:13 admis:false} ]
// console.log(user[1].nom);
// for(nbreEleve=0; nbreEleve<=user.lenght; nbreEleve++)
// 	if(nom===user[i].nom){

// 	}

