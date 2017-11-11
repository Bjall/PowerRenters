<!doctype html>
<html>
	<head>	
		<title> Création de compte </title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/styleND.css" />
		<link rel="stylesheet" type="text/css" href="../css/stylemenu.css" />
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	</head>
	<body>


			<?php 
include '../header.php';
	?>
		<form class="myforminscription">
			<div class="divradio">
				<input type="radio" name="civilite"> <label  > Mme </label>
				<input type="radio" name="civilite"> <label > Mr </label><br>
			</div>
			<label class="formlabel">Nom : </label><input class="forminput" type="text" name="ttNom" value="" required /> <br>
			<label class="formlabel">Prénom : </label><input class="forminput" type="text" name="ttPrenom" required /> <br>
			<label class="formlabel">Adresse : </label><input class="forminput" type="text" name="adresse" required /> <br>
			<label class="formlabel">Complément adresse : </label><input class="forminput" type="text" name="complementadr" /> <br>
			<label class="formlabel">Complément adresse : </label><input class="forminput" type="text" name="complementadr" /> <br>
			<label class="formlabel">Code postal : </label><input class="forminput" type="text" name="codepostal" required /> <br>
			<label class="formlabel">Ville : </label><input class="forminput" type="text" name="ville" required /> <br>
			<label class="formlabel">France : </label><input class="forminput" type="text" name="ville" /> <br>
			<label class="formlabel">Téléphone : </label><input class="forminput" type="text" name="telephone" /> <br>
			<label class="formlabel">Date de naissance : </label><!-- peut faire un date ou un menu déroulant ou... -->	
			<input class="forminput" type="date" required /><br>
			<label class="formlabel">Type permis : </label><input class="forminput" type="text" name="typePermis" /> <br>
			<label class="formlabel">Numéro de permis : </label><input class="forminput" type="text" name="typePermis" /> <br>
			<input type="checkbox" class="checkbox2"><label class="check">Je m'abonne à la newsletter</label><br>
			<input type="checkbox"><label class="checkbox1">En cochant cette case, j'accepte et je reconnais avoir pris connaissance des Conditions d'annulation et de modification en vigueur</label><br>
			<div class="validation">
				<input type="submit" id="ok">
			</div>
		</form>
		
	</body>
</html>