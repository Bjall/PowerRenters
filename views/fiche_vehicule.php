<!DOCTYPE html>
<html>
	<head>
		<title>Power Renters - Location tous véhicules</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css"/>
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
				<li><img src="images/logonegatif.png" alt="image article" class="logo"/></li>
		    	<li><p id="slogan">Power Renters</p></li>
			</ul>
		</div>

		<div id="container">
			<section class="liste_vehicule">
				<article class="fiche">
					<img class="fiche_photo" src="images/fiat-500.png">
					<aside class="fiche_details">
						<h1 id="veh_nom">Fiat 500</h1>
						<p id="veh_exemples">Fiat 500, Renault Twingo, Opel Adam, Smart Forfou</p>
						<p id="prix_veh">Tarif de location par jour à partir de <span id="tarif">64,90 €</span><p>
					</aside>
				</article>
				
				<form method="get" action="" class="myform_fiche">
					<div class="form_part"><label class="formtitre">Date de début:</label><input type="date" class="formsecondinput" id="calendarone"/></div>
					<div class="form_part"><label class="formtitre">Date de fin:</label><input type="date" class="formsecondinput" id="calendartwo"/></div>
					<div class="form_part"><label class="formtitre">Ville:</label><input type="text" class="formsecondinput"/></div>
					<div class="validation"><input type="submit" id="okfiche"></div>
				</form>
			</section>
		</div>
	</body>
</html>