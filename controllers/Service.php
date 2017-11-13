<?php

require_once '../Modele/dao/client_DAO.php';
			
			function Admin_Liste_Client () { //lister l'ensemble des clients
				$ListeClient=new client_DAO;
				$listeClient =  $ListeClient->Liste_Client ();
				return $listeClient;
			}
			
			
			
?>