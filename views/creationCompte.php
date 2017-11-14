<!DOCTYPE html>
<html>
	<head>	
		<title>Création de compte</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="/PowerRenters/css/styleND.css" />
		<link rel="stylesheet" type="text/css" href="/PowerRenters/css/stylemenu.css" />
		<link rel="stylesheet" type="text/css" href="/PowerRenters/css/style.css"/>
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	</head>

	<body>
		<?php 
			include('header.php');
		?>

		<!-- Formulaire d'inscription -->
		<fieldset>
			<form class="myforminscription" method="post" action="../controllers/InscriptionController.php">
				<legend>Inscrivez-vous</legend>
				<!-- Civilité (combo box) -->
				<div id="civcombo">
					<select name="cbCivilite">
						<option value="1">Mme</option>
						<option value="2">M.</option>
					</select>
				</div>
				<!-- Nom -->
				<label class="formlabel">Nom : </label><input class="forminput" type="text" name="nom" value="" required/><br>
				<!-- Prénom -->
				<label class="formlabel">Prénom : </label><input class="forminput" type="text" name="prenom" required/><br>
				<!-- Date de naissance -->
				<label class="formlabel">Date de naissance : </label><input class="forminput" type="date" name="birthdate" required>
				<!-- E-mail -->
				<input type="email" name="email" placeholder="ranger@power.com" required>
				<!-- Mot de passe -->
				<input type="password" name="password" placeholder="Mot de passe">
				<input type="password" name="password-check" placeholder="Retapez votre mot de passe">
				<!-- Statut client (combo box) -->
				<select name="cbStat">
					<option value="1">Particulier</option>
					<option value="2">Professionnel</option>
				</select>
				<!-- Adresse -->
				<label class="formlabel">Adresse : </label><input class="forminput" type="text" name="adresse"/><br>
				<label class="formlabel">Complément adresse : </label><input class="forminput" type="text" name="complementadr"/><br>
				<label class="formlabel">Complément adresse : </label><input class="forminput" type="text" name="complementadr"/><br>
				<label class="formlabel">Code postal : </label><input class="forminput" type="text" name="codepostal"/><br>
				<label class="formlabel">Ville : </label><input class="forminput" type="text" name="ville"/><br>
				<!-- Numéro de téléphone -->
				<label class="formlabel">Téléphone : </label><input class="forminput" type="text" name="telephone"/><br>
				<!-- Type de permis -->
				<label class="formlabel">Type permis : </label><input class="forminput" type="text" name="typePermis"/><br>
				<!-- Numéro du permis -->
				<label class="formlabel">Numéro de permis : </label><input class="forminput" type="text" name="numPermis"/><br>
				<!-- Checkbox -->
				<input type="checkbox" class="checkbox2"><label class="check">Je m'abonne à la newsletter</label><br>
				<input type="checkbox"><label class="checkbox1">En cochant cette case, j'accepte et je reconnais avoir pris connaissance des Conditions d'annulation et de modification en vigueur</label><br>
				<div class="validation">
				<!-- Submit -->
				<input type="submit" value="S'inscrire">
			</form>
		</fieldset>
	</body>
</html>