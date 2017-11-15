<?php
$dbConn = null;
function connexion(){
	global $dbConn;
	try{
		/*
		* Ouverture de la connexion à la base de données
		*/
		$dbConn = new PDO('mysql:host=localhost;charset=utf8;dbname=powerrenters;port=3307', 'root', 'root');
	}catch (Exception $ex){
		/*
		 * En cas d'erreur, gestion d'une exception (à voir plus tard)
		 */
		$dbConn = null;
		print($ex->getMessage());
	}
}

?>