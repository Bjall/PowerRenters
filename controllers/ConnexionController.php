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

	// Préparation de la requête
	$req = $bdd->prepare('SELECT * FROM client WHERE cli_mail = :mail AND cli_mdp = :pass');

	// Exécution de la requête avec les données saisies dans le formulaire
	$req->execute(array(
		'mail' => $_POST['email'],
		'pass' => $_POST['password']
		));

	// Stockage du jeu de résultats dans une variable
	$user = $req->fetch();

	// Si $user n'est pas vide (donc mail+mdp sont ok)
	if(!empty($user)) {
		$_SESSION['visiteur'] = true;
		$_SESSION['visiteur_id'] = $user['cli_id'];
		// Redirection vers la page d'accueil
		header('Location: http://localhost/PowerRenters/');
	} else {
		$_SESSION['info'] = 'Mauvais identifiants';
		print($_SESSION['info']);
	}


	?>

</body>
</html>