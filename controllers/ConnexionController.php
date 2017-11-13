<?php

	// Ce fichier gère la connexion à un espace sécurisé (client ou admin)

	// On set $dbConn à NULL.
	$dbConn = null;

	// Connexion à la BDD
	try{
	 	// Ouverture de la connexion à la base de données
		$dbConn = new PDO('mysql:host=localhost;port=3306;charset=utf8;dbname=powerrenters', 'root', '');
	}catch (Exception $ex){
		// En cas d'erreur, gestion d'une exception (à voir plus tard)
		print($ex->getMessage());
	}

	// Sélection des données de la table client
	$SQLQuery = 'SELECT * FROM client';
	$SQLStmt = $dbConn->prepare($SQLQuery);
	$SQLStmt->execute();
	$SQLRow = $SQLStmt->fetchObject();
	$client = new Client($SQLRow->cli_id, $SQLRow->cli_nom, $SQLRow->cli_prenom, $SQLRow->cli_date_naissance, $SQLRow->cli_mdp, $SQLRow->cli_mail, $SQLRow->cli_permis_numero, $SQLRow->cli_stat_id, $SQLRow->cli_civ_id);



