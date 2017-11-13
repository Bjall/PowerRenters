<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="Style.css" />
<?php
require_once '../Controleur/Service.php';
/*switch ($choix) {
	case "list" :*/
		$listeClient=Admin_Liste_Client();
		//var_dump($listeClient);
		require_once '../Vue/Admin_ListeClient.php';
/*	break;
	case "ajoutClient":	
	//rajouter les commande en lien avec l'ajout
	
	break;
			
		default : ;
		break;*/
?>

