<?php

class ConnexionBDD {
	// l'unicité de la connexion à la BDD est gérée par un singleton
	private static $singleton = null;
	// variable retournée par le getConnexion
	private static $con = null;

	private static $url = 'mysql:host=localhost;dbname=powerrenters;charset=utf8';
	private static $login = 'root';
	private static $passwd = 'root';
	private static $port = '3307';

	private function ConnexionBDD() {
		try {
			self::$con = new PDO(self::$url, self::$login,self::$passwd);
			self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		} catch (PDOException $e) {
			die("impossible d'ouvrir une connexion!");
		}
	}

	public static function getConnexion() {
		if (self::$singleton == null){ // si le singleton n'existe pas encore
			self::$singleton = new ConnexionBDD(); // appel au constructeur prive
		}
		return self::$con;
	}

	public function close() {
		try {
			if (self::$singleton != null){
				self::$con=null;
				self::$singleton=null;
			}
		} catch (Exception $e) {
			die('impossible de fermer la connexion');
		}
	}

}

?>