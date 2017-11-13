<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="Style.css" />
<?php
require_once '../Controllers/Service.php';
/*switch ($choix) {
	case "list" :*/
		$listeClient=Admin_Liste_Client();
		//var_dump($listeClient);
		require_once '../views/Admin_ListeClient.php';
/*	break;
	case "ajoutClient":	
	//rajouter les commande en lien avec l'ajout
	
	break;
			
		default : ;
		break;*/
?>

