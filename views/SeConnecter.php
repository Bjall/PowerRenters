<!doctype html>
<html>
	<head>	
		<title> Se Connecter </title>
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
			<label class="formlabel">Identifiant : </label><input class="forminput" type="text" name="ttNom" value="" required /> <br>
			<label class="formlabel">Mot de passe : </label><input class="forminput" type="text" name="ttPrenom" required /> <br>
			
			<div class="validation">
				<input type="submit" id="ok"/>
			</div>
			<a href="creationCompte.php" id="nouvclient">Nouveau client</a>
		</form>
		
	</body>
</html>