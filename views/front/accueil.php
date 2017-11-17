<!DOCTYPE html>
<html>
	<head>
		<title>Accueil</title>
	</head>

	<body>
		<?php 
			include_once('navbar.php');
		?>

		<!-- Formulaire de recherche d'un véhicule -->
		<section id="container1">
			<div class="firstpart">
				<form method="get" action="" class="myform">
					<label class="formtitre">Date de début:</label>
						<input type="date" class="formfirstinput" id="calendarone"/>
						<input type="time" class="formfirstinput" id="calendarone"/>
					<label class="formtitre">Date de fin:</label>
						<input type="date" class="formfirstinput" id="calendartwo"/>
						<input type="time" class="formfirstinput" id="calendarone"/>
					<label class="formtitre">Ville:</label>
						<input type="text" class="formfirstinput""/></br>
					<label class="formtitre">Choisissez votre véhicule:</label></br>
						<div class="radiolist">
							<div class="radiolistcol">
								<div class="radiolistitem">
									<input type="radio"/><img src="/PowerRenters/icones/car.svg" class="icone"/><label class="">Voitures</label>
								</div>
								<div class="radiolistitem">
									<input type="radio"/><img src="/PowerRenters/icones/van.svg" class="icone"/><label class="">Utilitaires</label>
								</div>
							</div>
							<div class="radiolistcol">
								<div class="radiolistitem">
									<input type="radio"/><img src="/PowerRenters/icones/motorbike.svg" class="icone"/><label class="">Motos</label>
								</div>
								<div class="radiolistitem">
									<input type="radio"/><img src="/PowerRenters/icones/bicycle.svg" class="icone"/><label class="">Vélos</label>
								</div>
							</div>
						</div>
					<div class="validation">
						<input type="submit" class="ok">
					</div>
				</form>
			</div>
		</section>
	</body>
</html>