<?php
	// Requiert la connexion à la BDD
	include_once('../load.php');


	// Vérification que les champs obligatoires ne sont pas vides
	if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['birthdate']) && !empty($_POST['email']) && !empty($_POST['password'])) {

		// Vérification que l'email n'est pas déjà enregistré
		$verif_email = $bdd->prepare('SELECT * FROM client WHERE cli_mail = ?');
		$verif_email->execute(array($_POST['email']));
		$email_unique = $verif_email->fetch();

		if(empty($email_unique)) {

			// Vérification double du mot de passe
			if($_POST['password'] == $_POST['password-check']) {

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
				$_SESSION['info'] = 'Votre inscription a bien été effectuée.';
				header('Location: http://localhost/PowerRenters/');

			} else {
				$_SESSION['info'] = 'Différence entre le mot de passe et la confirmation';
			}

		} else {
			$_SESSION['info'] = 'Vous êtes déjà inscrit avec cet e-mail.';
		}

	// Si un des champs obligatoire est vide
	} else {
		print('Merci de remplir tous les champs obligatoires.');
	}

	print($_SESSION['info']);

	include_once('../views/creationCompte.php');






