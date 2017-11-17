<<<<<<< HEAD
<!DOCTYPE html>
<html>
	<head>
		<title>Accueil</title>
	</head>

	<body>
		<?php 
			include_once('navbar.php');
		?>

		<!-- Formulaire d'inscription -->
		<section id="container1">
			<div class="firstpart">
				<form id="formulaire-inscription" method="post" action="/PowerRenters/controllers/inscriptionController.php">
					<legend>Inscrivez-vous</legend>
					<!-- Civilité (combo box) -->
					<div id="civcombo">
						<select name="cbCivilite">
							<option value="1">Mme</option>
							<option value="2">M.</option>
						</select>
					</div>
					<!-- Nom -->
					<label class="formlabel">Nom</label><input class="forminput" type="text" name="nom" value="" required/>
					<!-- Prénom -->
					<label class="formlabel">Prénom</label><input class="forminput" type="text" name="prenom" required/>
					<!-- Date de naissance -->
					<label class="formlabel">Date de naissance</label><input class="forminput" type="date" name="birthdate" required>
					<!-- E-mail -->
					<label class="formlabel">E-mail</label><input class="forminput" type="email" name="email" placeholder="ranger@power.com" required>
					<!-- Mot de passe -->
					<label class="formlabel">Mot de passe</label><input class="forminput" type="password" name="password" placeholder="Mot de passe">
					<label class="formlabel">Saisissez à nouveau<br>votre mot de passe</label><input class="forminput" type="password" name="password-check" placeholder="Retapez votre mot de passe">
					<!-- Statut client (combo box) -->
					<label id="form-vsetes">Vous êtes</label>
					<select id="statcombo" name="cbStat">
						<option value="1">Particulier</option>
						<option value="2">Professionnel</option>
					</select>
					<div id="form-separateur">
						<!-- Adresse -->
						<label class="formlabel">Adresse</label><input class="forminput" type="text" name="adresse"/>
						<label class="formlabel">Complément adresse</label><input class="forminput" type="text" name="complementadr"/>
						<label class="formlabel">Complément adresse</label><input class="forminput" type="text" name="complementadr"/>
						<label class="formlabel">Code postal</label><input class="forminput" type="text" name="codepostal"/>
						<label class="formlabel">Ville</label><input class="forminput" type="text" name="ville"/>
						<!-- Numéro de téléphone -->
						<label class="formlabel">Téléphone</label><input class="forminput" type="text" name="telephone"/>
						<!-- Type de permis -->
						<label class="formlabel">Type permis</label><input class="forminput" type="text" name="typePermis"/>
						<!-- Numéro du permis -->
						<label class="formlabel">Numéro de permis</label><input class="forminput" type="text" name="numPermis"/>
						<!-- Checkbox -->
						<div id="checkbox-validation">
							<input type="checkbox"><label>Je m'abonne à la newsletter</label>
						</div>
						<div id="checkbox-validation">
							<input type="checkbox"><label>En cochant cette case, j'accepte et je reconnais avoir pris connaissance des Conditions d'annulation et de modification en vigueur</label>
						</div>
					</div>
					<!-- Submit -->
					<div class="validation">
						<input id="bouton-inscription" type="submit" value="S'inscrire">
					</div>
				</form>
			</div>
		</section>
	</body>
=======
<!DOCTYPE html>
<html>
	<head>
		<title>Accueil</title>
	</head>

	<body>
		<?php 
			include_once('navbar.php');
		?>

		<!-- Formulaire d'inscription -->
		<section id="container1">
			<div class="firstpart">
				<fieldset>
					<form id="formulaire-inscription" method="post" action="/PowerRenters/controllers/inscriptionController.php">
						<legend>Inscrivez-vous</legend>
						<!-- Civilité (combo box) -->
						<div id="civcombo">
							<select name="cbCivilite">
								<option value="1">Mme</option>
								<option value="2">M.</option>
							</select>
						</div>
						<!-- Nom -->
						<label class="formlabel">Nom</label><input class="forminput" type="text" name="nom" value="" required/>
						<!-- Prénom -->
						<label class="formlabel">Prénom</label><input class="forminput" type="text" name="prenom" required/>
						<!-- Date de naissance -->
						<label class="formlabel">Date de naissance</label><input class="forminput" type="date" name="birthdate" required>
						<!-- E-mail -->
						<label class="formlabel">E-mail</label><input class="forminput" type="email" name="email" placeholder="ranger@power.com" required>
						<!-- Mot de passe -->
						<label class="formlabel">Mot de passe</label><input class="forminput" type="password" name="password" placeholder="Mot de passe">
						<label class="formlabel">Saisissez à nouveau<br>votre mot de passe</label><input class="forminput" type="password" name="password-check" placeholder="Retapez votre mot de passe">
						<!-- Statut client (combo box) -->
						<label id="form-vsetes">Vous êtes</label>
						<select id="statcombo" name="cbStat">
							<option value="1">Particulier</option>
							<option value="2">Professionnel</option>
						</select>
						<div id="form-separateur">
							<!-- Adresse -->
							<label class="formlabel">Adresse</label><input class="forminput" type="text" name="adresse"/>
							<label class="formlabel">Complément adresse</label><input class="forminput" type="text" name="complementadr"/>
							<label class="formlabel">Complément adresse</label><input class="forminput" type="text" name="complementadr"/>
							<label class="formlabel">Code postal</label><input class="forminput" type="text" name="codepostal"/>
							<label class="formlabel">Ville</label><input class="forminput" type="text" name="ville"/>
							<!-- Numéro de téléphone -->
							<label class="formlabel">Téléphone</label><input class="forminput" type="text" name="telephone"/>
							<!-- Type de permis -->
							<label class="formlabel">Type permis</label><input class="forminput" type="text" name="typePermis"/>
							<!-- Numéro du permis -->
							<label class="formlabel">Numéro de permis</label><input class="forminput" type="text" name="numPermis"/>
							<!-- Checkbox -->
							<div id="checkbox-validation">
								<input type="checkbox"><label>Je m'abonne à la newsletter</label>
							</div>
							<div id="checkbox-validation">
								<input type="checkbox"><label>En cochant cette case, j'accepte et je reconnais avoir pris connaissance des Conditions d'annulation et de modification en vigueur</label>
							</div>
						</div>
						<!-- Submit -->
						<div class="validation">
							<input id="bouton-inscription" type="submit" value="S'inscrire">
						</div>
					</form>
				</fieldset>
			</div>
		</section>
	</body>
>>>>>>> d75a6f3100bf5d4f4bed014607b5552fbfe7a094
</html>