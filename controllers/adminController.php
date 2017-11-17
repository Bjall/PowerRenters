<?php
	require_once('../models/dao/clientDAO.php');
	require_once('../models/dao/accessoireDAO.php');
	require_once('../models/dao/contratDAO.php');

	$_GET['option'] = isset ($_GET['option']) ? $_GET['option'] : NULL;

	$choix = $_GET['option'];
	
	switch ($choix) {
		case "accueil":
	        require_once('../views/back/adminAccueil.php');
	        break;

		// Recherche par numéro client
	    case "chercherClient":   
	        $toto = new client_DAO;
			$faireplaisiranathalie = $toto->cherche_Client($_GET['numeroclient']);
			require_once('../views/back/adminRechercheClient.php');
	        break;

	    // Recherche par nom du client
	    case "chercherNom":
	        $toto = new client_DAO;
			$faireplaisiranathalie = $toto->cherche_Client_Nom($_GET['nomclient']);
			require_once('../views/back/adminRechercheClient.php');
	        break;

	    // Afficher la liste de tous les clients
	    case "listeClient":
	       	$maliste = new client_DAO;
			$listeClient = $maliste->Liste_Client();
			require_once('../views/back/adminListeClients.php');
	        break;

		// Afficher la liste des accessoires
		case "AfficheAccessoire": 
			$listeAccessoire = new accessoire_DAO();
			$listeAcc = $listeAccessoire->affAccessoire();
			require_once('../views/back/adminListeAccessoires.php');
			break;

		// Rechercher un contrat par son numéro
	    case "rechercheContratNum" :
	    	$contratRecherche = new contrats_DAO();
			$ListeContrats =  $contratRecherche->cherche_Contrat($_GET['contratnumero']);
			require_once '../views/back/adminListeClients.php';
			break;

		// Afficher la liste de tous les contrats
		case "AfficherContrat" :
			echo 'En construction';
			break;

		default:
			echo 'Contactez les supers Power Renters';
	}