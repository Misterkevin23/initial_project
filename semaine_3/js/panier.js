function aPayerParArticle(){
	var facturations=document.querySelectorAll(".facturations li")
	console.log("hello");
	facturations.forEach(function(facturation) {
		var price = facturation.querySelector(".price");
		var quantite = facturation.querySelector(".quantite");
		console.log(quantite)
		if ( (quantite.value != "" && !isNaN (quantite.value)) && ( price.value != "" && !isNaN(price.value)) ) {
			var calc = price.value * quantite.value;
			console.log("hello2")
			facturation.querySelector(".totalAPayer").value = calc;
		}	
	})
}

function totalAPayer(){
	var total= document.querySelectorAll(".totalAPayer");
	console.log("yes");
	total.forEach(function(toto){
		var TtotalHT= toto.querySelector(".totalAPayer");
		if( TtotalHT.value != "" && !isNaN(total.value)){
			var calcul += TtotalHT.value *1;
			toto.querySelector(".totalPanier").value = calcul;
		}
	})
}

