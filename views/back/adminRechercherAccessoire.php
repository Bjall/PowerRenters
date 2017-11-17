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
			<p class= "contenu">Accessoire </p>
		</div>
		<img src="../images/personnes.png" class="imagepersonne">
		<img src="../images/voiture.png" class="imagevoiture">

		<div class="formulaire">
			<label for="numeroaccessoire" class="contenuform">Rechercher un accessoire par numéro:</label><input  type="text" name="numeroaccessoire" class="contenuform"/> <input type="submit" name="submit" class="contenuform"/><br/>

			<label for="nomaccessoire" class="contenuform">Rechercher un accessoire par nom:</label><input type="text" name="nomaccessoire" class="contenuform"/> <input type="submit" name="submit" class="contenuform"/><br/>
		</div>
	</body>

	<footer>
		<a href="mentionlegales.php">Mentions legales</a>
		<a href="apropos.php"> A propos</a>
		<a href="faq.php">FAQ</a>
	</footer>
</html>