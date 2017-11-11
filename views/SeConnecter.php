<!DOCTYPE html>
<html>
	<head>	
		<title> Se Connecter </title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/styleND.css" />
		<link rel="stylesheet" type="text/css" href="../css/stylemenu.css" />
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
		<link rel="stylesheet" href="../css/style.css"/>
	</head>
	<body>

	<?php 
include '../header.php';
	?>
		<form class="myforminscription" >
			<label class="formlabel">Identifiant : </label><input class="forminput" type="text" name="ttNom" value="" required /> <br>
			<label class="formlabel">Mot de passe : </label><input class="forminput" type="text" name="ttPrenom" required /> <br>
			
			<div class="validation">
				<input type="submit" id="ok"/>
			</div>
			<a href="creationCompte.php" id="nouvclient">Nouveau client</a>
		</form>
		
	</body>
</html>