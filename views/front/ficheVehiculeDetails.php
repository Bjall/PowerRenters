<!DOCTYPE html>
<html>
	<head>
		<title>Accueil</title>
	</head>

	<body>
		<?php 
			include_once('navbar.php');
		?>
		
		<div id="container3">
			<section class="liste_vehicule">
				<article class="fiche">
					<img class="fiche_photo" src="../images/fiat-500.png">
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