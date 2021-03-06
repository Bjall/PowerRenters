<!DOCTYPE html>
<html>
	<head>
		<title>Accueil</title>
	</head>

	<body>
		<?php 
			include_once('navbar.php');
		?>
		
		<div id="container2">
			<section class="liste_vehicule">
				<h1>Notre flotte de véhicules</h1>

				<article class="vehicule_fiche">
					<img class="vehicule_left" src="/PowerRenters/images/fiat-500.png">
					<div class="vehicule_middle">
						<p><span id="categorie">Berline | Economique<span></p>
						<p><span id="veh_exemples">Fiat 500, Renault Twingo, Opel Adam, Smart Forfour<span><p>
						<p id="prix_par">Prix par jour dès <span id="prix">64,90 €</span><p>
					</div>
					<div class="vehicule_right">
						<ul>
							<li><img class="icone" src="/PowerRenters/icones/clim.svg">Climatisation</li>
							<li><img class="icone" src="/PowerRenters/icones/gearbox.svg">Manuelle</li>
							<li><img class="icone" src="/PowerRenters/icones/users.svg">4 places</li>
							<li><img class="icone" src="/PowerRenters/icones/doors.svg">3 portes</li>
						</ul>
						<a href="http://www.google.fr">Réserver</a>
					</div>
				</article>

				<article class="vehicule_fiche">
					<img class="vehicule_left" src="/PowerRenters/images/polo.png">
					<div class="vehicule_middle">
						<p><span id="categorie">Berline | Economique +<span></p>
						<p><span id="veh_exemples">VW Polo, Opel Corsa, Citroen C3, Seat Ibiza<span><p>
						<p id="prix_par">Prix par jour dès <span id="prix">69,90 €</span><p>
					</div>
					<div class="vehicule_right">
						<ul>
							<li><img class="icone" src="/PowerRenters/icones/clim.svg">Climatisation</li>
							<li><img class="icone" src="/PowerRenters/icones/gearbox.svg">Manuelle</li>
							<li><img class="icone" src="/PowerRenters/icones/users.svg">5 places</li>
							<li><img class="icone" src="/PowerRenters/icones/doors.svg">3 portes</li>
						</ul>
						<a href="http://www.google.fr">Réserver</a>
					</div>
				</article>

				<article class="vehicule_fiche">
					<img class="vehicule_left" src="/PowerRenters/images/ford-focus.png">
					<div class="vehicule_middle">
						<p><span id="categorie">Berline | Confort<span></p>
						<p><span id="veh_exemples">Ford Focus, Peugeot 308, Opel Astra, Renault Mégane<span><p>
						<p id="prix_par">Prix par jour dès <span id="prix">79,90 €</span><p>
					</div>
					<div class="vehicule_right">
						<ul>
							<li><img class="icone" src="/PowerRenters/icones/clim.svg">Climatisation</li>
							<li><img class="icone" src="/PowerRenters/icones/gearbox.svg">Manuelle</li>
							<li><img class="icone" src="/PowerRenters/icones/users.svg">5 places</li>
							<li><img class="icone" src="/PowerRenters/icones/doors.svg">3 portes</li>
						</ul>
						<a href="http://www.google.fr">Réserver</a>
					</div>
				</article>

				<article class="vehicule_fiche">
					<img class="vehicule_left" src="/PowerRenters/images/sprinter.png">
					<div class="vehicule_middle">
						<p><span id="categorie">Utilitaire 10 m3<span></p>
						<p><span id="veh_exemples">Mercedes Sprinter, Renault Master, Fiat Ducato<span><p>
						<p id="prix_par">Prix par jour dès <span id="prix">49,90 €</span><p>
					</div>
					<div class="vehicule_right">
						<ul>
							<li><img class="icone" src="/PowerRenters/icones/users.svg">3 places</li>
							<li><img class="icone" src="/PowerRenters/icones/gearbox.svg">Manuelle</li>
							<li><img class="icone" src="/PowerRenters/icones/box.svg">10 m3</li>
							<li><img class="icone" src="/PowerRenters/icones/weight.svg">1180 Kg</li>
						</ul>
						<a href="http://www.google.fr">Réserver</a>
					</div>
				</article>
			</section>
		</div>
	</body>
</html>