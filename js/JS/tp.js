var question=[
	{
		ques:"Es-ce que tu aime le Javascript ?",
		answer:"oui"
	},

	{
		ques:"Le JavaScript est une évolution du Java?",
		answer:"non"
	},

	{
		ques:"Le JavaScript est proche du Java",
		answer:"non"
	},

	{
		ques:"Le Javascript est un language d'objet par prototypage?",
		answer:"oui"
	},

	{
		ques:"Le JavaScript est souvent utilisé coté client?",
		answer:"oui"
	},

	{
		ques:"Le Javascript peut être utilisé coté client et serveur?",
		answer:"oui"
	}
]
console.log("Essaye de repondre à ce questionnaire!!!");
console.log(question[0].ques);
console.log(question.length);
var bonneReponse=0;
var mauvaiseReponse=0;
var i=0;

var forQuestionnaire= function() {
	alert("Repond à ces " + question.length + " questions par un simple oui ou non")
	for(i=0; i<=(question.length-1); i++){
		console.log("question N°"+(i+1)+ " sur " + question.length + " ."  );
		var saisie= prompt(question[i].ques);
		var lowerReponse= saisie.toLowerCase();
		var reponse=lowerReponse.trim();
		if (reponse===question[i].answer){
			console.log("Bien jouer, c'est evidant que l'on peut répondre que " + question[i].answer + " à la question question : " + question[i].ques + "!!" )
			bonneReponse++
		}
		else{
			var veriter=question[i].answer.toUpperCase();
			console.log("Serieux " + reponse +" !!! Refléchi. La question était : " + question[i].ques + " C'est évidant que la reponse est " + veriter + " !!!")
			mauvaiseReponse++
		}
	}

	var ratio= (bonneReponse-mauvaiseReponse)/question.length;
	console.log("Ton taux de réussite est de : " + (ratio*100) + "%");
	if(ratio===1){
		alert("FELICITATION c'est un sans fautes!!");
	}

	else if (ratio<1&&ratio>=0){
		alert("Cool tu a bien écouté");
	}

	else if (ratio<0&&ratio>-1){
		alert("Quand l'éléve est nul, le prof ne peux rien faire");
	}

	else{
		alert("Nan mais atend tu étais en classe???")
	}
}	



var whileQuestionnaire= function () {
		alert("Repond à ces " + question.length + " questions par un simple oui ou non")
		while(i<=question.length-1){
		console.log("question N°"+(i+1)+ " sur " + question.length + " ."  );
		var saisie= prompt(question[i].ques);
		var lowerReponse= saisie.toLowerCase();
		var reponse=lowerReponse.trim();
		if (reponse===question[i].answer){
			console.log("Bien jouer, c'est evidant que l'on peut répondre que " + question[i].answer + " à la question question : " + question[i].ques + "!!" )
			bonneReponse++
			i++
		}
		else{
			var veriter=question[i].answer.toUpperCase();
			console.log("Serieux " + reponse +" !!! Refléchi. La question était : " + question[i].ques + " C'est évidant que la reponse est " + veriter + " !!!")
			mauvaiseReponse++
			i++
		}
	}

	var ratio= (bonneReponse-mauvaiseReponse)/question.length;
	console.log("Ton taux de réussite est de : " + (ratio*100) + "%");
	if(ratio===1){
		alert("FELICITATION c'est un sans fautes!!");
	}

	else if (ratio<1&&ratio>=0){
		alert("Cool tu a bien écouté");
	}

	else if (ratio<0&&ratio>-1){
		alert("Quand l'éléve est nul, le prof ne peux rien faire");
	}

	else{
		alert("Nan mais atend tu étais en classe???")
	}
}