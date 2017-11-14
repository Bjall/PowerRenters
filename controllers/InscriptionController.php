<?php
	// Connexion à la BDD
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=powerrenters;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}

	// Préparation de la requête pour insérer les données
	$req = $bdd->prepare('INSERT INTO client (cli_civ_id, cli_nom, cli_prenom, cli_date_naissance, cli_mail, cli_mdp, cli_stat_id) VALUES (:civ, :nom, :prenom, :ddn, :mail, :passwd, :stat)');

	// Exécution de la requête avec les données saisies dans le formulaire
	$req->execute(array(
		'civ' => $_POST['cbCivilite'],
		'nom' => $_POST['nom'],
		'prenom' => $_POST['prenom'],
		'ddn' => $_POST['birthdate'],
		'mail' => $_POST['email'],
		'passwd' => $_POST['password'],
		'stat' => $_POST['cbStat']
		));

	print('Vous êtes désormais inscrit.');

	?>

</body>
</html>