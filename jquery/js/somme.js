// function sum_elements(){
// 	var somme=0;
// 	var result = document.getElementById("somme");
// 	for (var i=1; i<=6; i++){
// 		var element = document.getElementById("el_"+i);
// 		if(element.value != "" && !isNaN(element.value)){  isNaN veut dire si ce n'est pas un nombre
// 			somme += parseInt(element.value); /* += somme=somme+ parseInt(element.value) ; parseInt force a etre en entier; parseflot force a etre en nombre decimal */ 
// 		}
// 	}
// 	result.value=somme;
// 	return somme;
// }

function sum_elements(){ 
	var somme=0;
	var result = document.getElementById("somme");
	for (var i=1; i<=6; i++){
		var element = document.getElementById("el_"+i);
		if(element.value!= "" && !isNaN(element.value)){  /*isNaN veut dire si ce n'est pas un nombre*/
			somme += parseInt(element.value); /* += somme=somme+ parseInt(element.value) ; parseInt force a etre en entier; parseflot force a etre en nombre decimal */ 
		}
	}
	result.value=somme;
}
