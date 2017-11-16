<?php
	// Requiert la connexion à la BDD
	include_once('../load.php');

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

		// Vérification si le visiteur est un client ou un employé
		$query = $bdd->prepare('SELECT * FROM client WHERE cli_id = :id');
		
		$query->execute(array('id' => $_SESSION['visiteur_id']));

		$whois = $query->fetch();

		// Si c'est un admin
		if ($whois['cli_stat_id'] == '3') {
			// Redirection vers la page d'accueil back
			header('Location: http://localhost/PowerRenters/views/administrateur.php');
		} else {
			// Redirection vers la page d'accueil front
			header('Location: http://localhost/PowerRenters/controllers/Accueil.Controller.php');
		}

	} else {
		$_SESSION['info'] = 'Mauvais identifiants';
		print($_SESSION['info']);
	}


	?>

</body>
</html>