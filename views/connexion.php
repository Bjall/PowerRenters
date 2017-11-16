<!DOCTYPE html>
<html>
	<head>	
		<title>Connexion</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/styleND.css" />
		<link rel="stylesheet" type="text/css" href="../css/stylemenu.css" />
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	</head>

	<body>
		<?php 
			include 'header.php';
		?>

		<!-- Formulaire de connexion -->
		<fieldset>
			<form id="formulaire-connexion" method="post" action="../controllers/ConnexionController.php">
				<legend>Connectez-vous</legend>
				<!-- E-mail -->
				<input type="email" name="email" placeholder="ranger@power.com" required>
				<!-- Mot de passe -->
				<input type="password" name="password" placeholder="Mot de passe">
				<!-- Submit -->
				<input type="submit" value="Se connecter">
			</form>
		</fieldset>
	</body>
</html>