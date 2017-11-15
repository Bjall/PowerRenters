<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="Style.css" />
<?php
require_once '../models/DAO/client_DAO.php';
/*switch ($choix) {
	case "list" :*/
		/*$listeClient=Admin_Liste_Client();
		//var_dump($listeClient);
		require_once '../views/Admin_ListeClient.php';*/



/*$daoClient= new client_DAO();
$listeClients = $daoClient->Liste_Client();
//var_dump($listeClient);
require_once '../views/Admin_ListeClient.php';
*/

require_once '../models/DAO/accessoire_DAO.php';
$listeAccessoire = new accessoire_DAO();
$listeAcc = $listeAccessoire->affAccessoire();
//var_dump($listeAcc);
require_once '../views/affAccessoire.php';

/*	break;
	case "ajoutClient":	
	//rajouter les commande en lien avec l'ajout


	
	break;
			
		default : ;
		break;*/
?>