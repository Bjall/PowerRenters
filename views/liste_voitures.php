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
				<h1>Notre flotte de véhicules</h1>

				<article class="vehicule_fiche">
					<img class="vehicule_left" src="images/fiat-500.png">
					<div class="vehicule_middle">
						<p><span id="categorie">Berline | Economique<span></p>
						<p><span id="veh_exemples">Fiat 500, Renault Twingo, Opel Adam, Smart Forfour<span><p>
						<p id="prix_par">Prix par jour dès <span id="prix">64,90 €</span><p>
					</div>
					<div class="vehicule_right">
						<ul>
							<li><img class="icone" src="icones/clim.svg">Climatisation</li>
							<li><img class="icone" src="icones/gearbox.svg">Manuelle</li>
							<li><img class="icone" src="icones/users.svg">4 places</li>
							<li><img class="icone" src="icones/doors.svg">3 portes</li>
						</ul>
						<a href="http://www.google.fr">Réserver</a>
					</div>
				</article>

				<article class="vehicule_fiche">
					<img class="vehicule_left" src="images/polo.png">
					<div class="vehicule_middle">
						<p><span id="categorie">Berline | Economique +<span></p>
						<p><span id="veh_exemples">VW Polo, Opel Corsa, Citroen C3, Seat Ibiza<span><p>
						<p id="prix_par">Prix par jour dès <span id="prix">69,90 €</span><p>
					</div>
					<div class="vehicule_right">
						<ul>
							<li><img class="icone" src="icones/clim.svg">Climatisation</li>
							<li><img class="icone" src="icones/gearbox.svg">Manuelle</li>
							<li><img class="icone" src="icones/users.svg">5 places</li>
							<li><img class="icone" src="icones/doors.svg">3 portes</li>
						</ul>
						<a href="http://www.google.fr">Réserver</a>
					</div>
				</article>

				<article class="vehicule_fiche">
					<img class="vehicule_left" src="images/ford-focus.png">
					<div class="vehicule_middle">
						<p><span id="categorie">Berline | Confort<span></p>
						<p><span id="veh_exemples">Ford Focus, Peugeot 308, Opel Astra, Renault Mégane<span><p>
						<p id="prix_par">Prix par jour dès <span id="prix">79,90 €</span><p>
					</div>
					<div class="vehicule_right">
						<ul>
							<li><img class="icone" src="icones/clim.svg">Climatisation</li>
							<li><img class="icone" src="icones/gearbox.svg">Manuelle</li>
							<li><img class="icone" src="icones/users.svg">5 places</li>
							<li><img class="icone" src="icones/doors.svg">3 portes</li>
						</ul>
						<a href="http://www.google.fr">Réserver</a>
					</div>
				</article>

				<article class="vehicule_fiche">
					<img class="vehicule_left" src="images/sprinter.png">
					<div class="vehicule_middle">
						<p><span id="categorie">Utilitaire 10 m3<span></p>
						<p><span id="veh_exemples">Mercedes Sprinter, Renault Master, Fiat Ducato<span><p>
						<p id="prix_par">Prix par jour dès <span id="prix">49,90 €</span><p>
					</div>
					<div class="vehicule_right">
						<ul>
							<li><img class="icone" src="icones/users.svg">3 places</li>
							<li><img class="icone" src="icones/gearbox.svg">Manuelle</li>
							<li><img class="icone" src="icones/box.svg">10 m3</li>
							<li><img class="icone" src="icones/weight.svg">1180 Kg</li>
						</ul>
						<a href="http://www.google.fr">Réserver</a>
					</div>
				</article>
			</section>
		</div>

	</body>
</html>