<?php

function connexion(){
	$dbConn = null;
	try{
		/*
		* Ouverture de la connexion à la base de données
		*/
		$dbConn = new PDO('mysql:host=localhost;charset=utf8;dbname=powerrenters', 'root', 'root');
	}catch (Exception $ex){
		/*
		 * En cas d'erreur, gestion d'une exception (à voir plus tard)
		 */
		print($ex->getMessage());
	}
}
?>