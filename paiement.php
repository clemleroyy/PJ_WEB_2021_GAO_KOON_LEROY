<?php 
	$name = isset($_POST["name"])? $_POST["name"] : "";
	$adress1 = isset($_POST["adress1"])? $_POST["adress1"] : "";
	$adress2 = isset($_POST["adress2"])? $_POST["adress2"] : "";
	$city = isset($_POST["city"])? $_POST["city"] : "";
	$zipcode = isset($_POST["zipcode"])? $_POST["zipcode"] : "";
	$country = isset($_POST["country"])? $_POST["country"] : "";
	$phone = isset($_POST["phone"])? $_POST["phone"] : "";

	$erreur = "";

	if ($name == "") {
		$erreur .= "Le champ Nom est vide. <br>";
	}
	if ($adress1 == "") {
		$erreur .= "Le champ Adresse Ligne 1 est vide. <br>";
	}
	if ($adress2 == "") {
		$erreur .= "Le champ Adresse Ligne 2 est vide. <br>";
	}
	if ($city == "") {
		$erreur .= "Le champ Ville est vide. <br>";
	}
	if ($zipcode == "") {
		$erreur .= "Le champ Code Postal est vide. <br>";
	}
	if ($country == "") {
		$erreur .= "Le champ Pays est vide. <br>";
	}
	if ($phone == "") {
		$erreur .= "Le champ Numero de telephone est vide. <br><br>";
	}
	if ($erreur == "") {
		echo "Bravo le formulaire est valide.";
	}else {
		echo "Il y a une erreur dans les coordonnées de livraison : <br><br>" .$erreur;
	}

	$cardnumber = isset($_POST["cardnumber"])? $_POST["cardnumber"] : "";
	$namecard = isset($_POST["namecard"])? $_POST["namecard"] : "";
	$dateE = isset($_POST["dateE"])? $_POST["dateE"] : "";
	$security = isset($_POST["security"])? $_POST["security"] : "";
	

	$erreur2 = "";

	if ($cardnumber == "") {
		$erreur2 .= "Le champ Numéro de carte est vide. <br>";
	}
	if ($namecard == "") {
		$erreur2 .= "Le champ Nom affiché sur la carte est vide. <br>";
	}
	if ($dateE == "") {
		$erreur2 .= "Le champ Date d'expiration est vide. <br>";
	}
	if ($security == "") {
		$erreur2 .= "Le champ Code de sécurité est vide. <br>";
	}
	
	if (($erreur == "")&($erreur2 == "")) {
		echo "";
	}else {
		echo "Il y a une erreur dans le paiement, vérifiez les informations saisies <br><br>" .$erreur2;
	}



 ?>
