alert("hello");
console.log(5*2);
// var nombre=prompt("Entrez un nombre superieur à 18:");
var majeur=18;
/*
if (nombre>= 18){
	console.log("Vous êtes majeur " + nombre +" ans" + " " + "c'est un bonne age!");
		if(nombre==18){
			console.log("Mais c'est limite que même!!");
			break;
		}
}
else{
	var ageMajorite=majeur-nombre;
	console.log("desolez, mineur interdit," + " " + " attend" + " " + ageMajorite + " ans");
}
*/

// var age=prompt("Entrez votre age:");
var age=19
age=parseInt(age);
console.log(age);
switch (age){
	case 18 && 19 && 20:
	console.log("Vous êtes majeur " + age +" ans" + " " + "c'est un bonne age!");
	break;
	case (5 && 6 && 4):
	console.log("Bravo vous bénéficié du tarif réduit");
	alert(age + "!" + " prenez votre carte tarif réduit!" );
	break;
	// default:
	// var ageMajorite=majeur-age;
	// console.log("Vous ètes mineur");
	// alert("Reviens dans "+ ageMajorite );
}

// if(nombre>=18){
// 	console.log("Vous êtes majeur " + nombre +" ans" + " " + "c'est un bonne age!");
// 	if(nombre<=25|| nombre > 90){
// 	console.log("Bravo vous bénéficié du tarif réduit");
// 	alert(nombre + "!" + " prenez votre carte tarif réduit!" );
// 	}
// }	
// else if (nombre < 18 ){
// 	var ageMajorite=majeur-nombre;
// 	console.log("Vous ètes mineur");
// 	alert("Reviens dans "+ ageMajorite );
// }
