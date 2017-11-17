<!DOCTYPE html>
<html>
	<head>
		<title>Back-office</title>
	</head>

	<body>
		<?php
			include_once('adminNavbar.php');
		?>

		<div>
			<p class= "contenu">Bienvenue, administrateur.</p>
			<p class= "contenu">Accès rapide</p>
		</div>
		<img src="/PowerRenters/images/personnes.png" class="imagepersonne">
		<img src="/PowerRenters/images/voiture.png" class="imagevoiture">
		<div class="formulaire">
			<label for="numeroclient" class="contenuform">Rechercher un client par numéro:</label><input  type="text" name="numeroclient" class="contenuform"/> <input type="submit" name="submit" class="contenuform"/><br/>
			<label for="nomclient" class="contenuform">Rechercher un client par nom:</label><input type="text" name="nomclient" class="contenuform"/> <input type="submit" name="submit" class="contenuform"/><br/>
			<label for="numerovehicule" class="contenuform">Rechercher un véhicule par numéro:</label><input type="text" name="numerovehicule" class="contenuform"/> <input type="submit" name="submit" class="contenuform"/><br/>
		</div>
	</body>

	<footer>
		<a href="mentionlegales.php">Mentions legales</a>
		<a href="apropos.php"> A propos</a>
		<a href="faq.php">FAQ</a>
	</footer>
</html>