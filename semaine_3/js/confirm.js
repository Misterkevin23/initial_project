function verif(){

	var male = document.getElementById("M").checked;
	var female = document.getElementById("mlle").checked;
	if (!male && !female) {
		alert("Attention veuillez entrer votre civilité !!" )
		document.formul.M.focus();
		document.formul.M.style.backgroundColor = "red";

		return false;
	}

	var prenom = document.getElementById("fistname").value;
	if (prenom =="") {
		alert("Attention veuillez entrer votre prénom !!" )
		document.formul.fistname.focus();
		document.formul.fistname.style.backgroundColor = "red";

		return false;
	}

	if (document.getElementById("name").value =="") {
		alert("Attention veuillez entrer votre nom !!" )
		document.formul.name.focus();
		document.formul.name.style.backgroundColor = "red";

		return false;
	}

	var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,3})/;
	if (regex.test(document.getElementById('mail').value)){
		return true;
	}

	else{
		alert("Attention veuillez entrer un e-mail valide !!" )
		document.formul.mail.focus();
		document.formul.mail.style.backgroundColor = "red";

		return false;
	}

	var mobile = /^(01|02|03|04|05|06|07|08|09|0033|\+33)[0-9]{8}/;
	if (mobile.test(document.getElementById("phone").value)){
		return true;
	}

	else{
		alert("Attention veuillez entrer un numeros de téléphone valide")
		document.formul.phone.focus();
		document.formul.phone.style.backgroundColor = "red";

		return false;
	}

	var num = document.getElementById("numeros").value;
	if (num =="" || num.NaN()) {
		alert("Attention veuillez entrer votre numeros de rue !!" )
		document.formul.numeros.focus();
		document.formul.numeros.style.backgroundColor = "red";

		return false;
	}

	
	if (document.getElementById("rue").value =="") {
		alert("Attention veuillez entrer votre nom de rue !!" )
		document.formul.rue.focus();
		document.formul.rue.style.backgroundColor = "red";

		return false;
	}


	if (document.getElementById("postcode").value =="") {
		alert("Attention veuillez entrer un code postal valide !!" )
		document.formul.postcode.focus();
		document.formul.postcode.style.backgroundColor = "red";

		return false;
	}

	if (document.getElementById("ville").value =="") {
		alert("Attention veuillez entrer le nom de le Ville !!" )
		document.formul.ville.focus();
		document.formul.ville.style.backgroundColor = "red";

		return false;
	}
	
}