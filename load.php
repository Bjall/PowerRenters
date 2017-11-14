<?php
	// Requiert le fichier contenant les identifiants de connexion
	require('config.php');

	// Connexion à la BDD
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname='.$config['base'].';charset=utf8', ''.$config['loginBDD'].'', ''.$config['mdpBDD'].'');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}