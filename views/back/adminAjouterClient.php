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
			<p class= "contenu">Ajouter un client.</p>
			<!-- numero de permis, type de permis, civilite, statut -->
		</div>
		<div class="formulaire">

			<label for="nomclient" class="contenuform"> Ajouter nom:</label><input  type="text" name="nomclient" class="contenuform"/> <br/>

			<label for="prenomclient" class="contenuform">Ajouter un prénom:</label><input type="text" name="prenomclient" class="contenuform"/><br/>

			<label for="datedenaissanceclient" class="contenuform">Ajouter une date de naissance:</label><input type="date" name="datedenaissanceclient" class="contenuform"/><br/>

			<label for="mailclient" class="contenuform">Ajouter une adresse mail:</label><input type="text" name="mailclient" class="contenuform"/><br/>

			<label for="mdpclient" class="contenuform">Ajouter un mot de passe:</label><input type="text" name="mdpclient" class="contenuform"/><br/>

			<label for="typepermisclient" class="contenuform">Ajouter des permis:</label>
			<input type="radio" name="typepermisclient" value="#" class="contenuform"/>Permis A<br/>
			<input type="radio" name="typepermisclient" value="#" class="contenuform"/>Permis A1<br/>
			<input type="radio" name="typepermisclient" value="#" class="contenuform"/>Permis A2<br/>
			<input type="radio" name="typepermisclient" value="#" class="contenuform"/>Permis B<br/>
			<input type="radio" name="typepermisclient" value="#" class="contenuform"/>Permis AM<br/><br/>

			<label for="numpermisclient" class="contenuform">Ajouter un numéro de permis:</label><input type="text" name="numpermisclient" class="contenuform"/><br/>

			<label for="civiliteclient" class="contenuform"> Ajouter une civilité:</label>
			<input type="radio" name="civiliteclient" value="#" class="contenuform"/>Monsieur<br/>
			<input type="radio" name="civiliteclient" value="#" class="contenuform"/>Madame<br/>

			<label for="statutclient" class="contenuform"> Ajouter un statut:</label>
			<input  type="radio" name="statutclient" class="contenuform"/>Particulier<br/>
			<input  type="radio" name="statutclient" class="contenuform"/>Professionnel<br/>

			<input type="submit" name="submit" class="soumettre"/><br/>
		</div>
	</body>

	<footer>
		<a href="../views/mentionlegales.php">Mentions legales</a>
		<a href="../views/apropos.php">A propos</a>
		<a href="../views/faq.php">FAQ</a>
	</footer>
</html>