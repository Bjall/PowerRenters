<!doctype html>
<html>
	<head>	
		<title> Paiement </title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="styleND.css" />
		<link rel="stylesheet" type="text/css" href="stylemenu.css" />
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	</head>
	<body>
	<nav id="menuhaut">
        <ul>
        <li><a href="index.php" title="Page d'accueil">Accueil</a></li>
        <li><a href="liste.php" title="Page liste">Agences</a></li>
        <li><a href="liste_voitures.php" title="Page formulaire">Voitures</a></li>
        <li><a href="fiche.php" title="Page formulaire">Utilitaires</a></li>
        <li><a href="fiche.php" title="Page formulaire">Motos</a></li>
        <li><a href="fiche.php" title="Page formulaire">Vélos</a></li>
        <li><a href="fiche.php" title="Page formulaire">Professionnels</a></li>
        <li><a href="creationCompte.php" title="Page formulaire">Votre compte</a></li>
    </ul>
    </nav>
    <div id="bandeau">
         <ul class="listeb">
			<li><img src="mesimages/logonegatif.png" alt="image article" class="logo"/></li>
			<li><p id="slogan">Power Renters</p></li>
		</ul>
	</div>

<form class="myformpaiement" >
	<div class="divent">	
		<p>Paiement sécurisé sur internet</p>
		<p>Montant de la transaction : XX euros </p>
		<img src="mesimages/logocb.jpg" class="logocb" alt="Photo cb" />
	</div>
	<div class="divtest">
		<label class="formlabel">Numéro de la carte bancaire : </label><input class="forminput" type="text" name="ttNumCarte" value="" required /> <br>
	</div>
	<label class="formlabel">Date d'expiration : </label>
	<div class="forminput">
		<select >
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select>
		<select>
			<option value="1">17</option>
			<option value="2">18</option>
			<option value="3">19</option>
			<option value="4">20</option>				
		</select>
	</div>
	<label class="formlabel">Cryptogramme visuel de votre carte : </label><input class="forminput" id="crypt" type="text" name="ttNumCarte" value="" required /> <br>
	<div class="validationPaiement">
		<input type="submit" id="ok">
	</div>
	<p>Votre transaction est sécurisé </p>
	<p>Votre paiement sera réalisé en toute sécurité </p>
</form>

