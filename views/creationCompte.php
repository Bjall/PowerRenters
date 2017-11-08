<!doctype html>
<html>
	<head>	
		<title> Création de compte </title>
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
		<form class="myforminscription" >
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