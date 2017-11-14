<?php
	include_once('Client.php'); // Implémenter avec la bonne classe client

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=site;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}

	$req = $bdd->prepare('INSERT INTO clients (cli_nom, cli_prenom, cli_date_naissance, cli_mail, cli_mdp) VALUES (:nom, :prenom, :ddn, :mail, :passwd)');
	$req->execute(array(
		'nom' => $_POST['nom'],
		'prenom' => $_POST['prenom'],
		'ddn' => $_POST['birthdate'],
		'mail' => $_POST['email'],
		'passwd' => $_POST['password']
		));

	echo 'Vous êtes bien inscrit !';

	?>

</body>
</html>