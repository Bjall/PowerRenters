<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<fieldset>
		<form method="post" action="../controllers/InscriptionController.php">
			<legend>Inscrivez-vous</legend>
			<input type="text" name="nom" placeholder="Nom" required>
			<input type="text" name="prenom" placeholder="Prénom" required>
			<input type="date" name="birthdate">
			<input type="email" name="email" placeholder="Adresse e-mail" required>
			<input type="password" name="password" placeholder="Mot de passe">
			<input type="password" name="password-check" placeholder="Retapez votre mot de passe">
			<input type="submit" value="S'inscrire">
		</form>
	</fieldset>
</body>
</html>