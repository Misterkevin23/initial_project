function aPayerParArticle(){
	var matchFacturations=document.querySelectorAll(".match .element")
	console.log(matchFacturations[0]);

	for(var i=1; i<matchFacturation.length; i++)
			if(matchFacturation[i]=matchFacturation.getElementsByClassName("price")){
				var price = facturation.querySelector(".price");
				return true;
			}
			else if (matchFacturation[i]=matchFacturation.getElementsByClassName("price")){
				var quantite = facturation.querySelector(".quantite");
				return true;
			}

			else{
				return false;
			}
			
			
			console.log(quantite)
			if ( (quantite.value != "" && !isNaN (quantite.value)) && ( price.value != "" && !isNaN(price.value)) ) {
				var calc = price.value * quantite.value;
				console.log("hello2")
				facturation.querySelector(".totalAPayer").value = calc;
			}
		}		
	
}