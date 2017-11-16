<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="Style.css" />
<?php
require_once '../Models/dao/client_DAO.php';
require_once '../models/DAO/accessoire_DAO.php';

	$_POST['option'] = isset ($_POST['option']) ? $_POST['option'] : NULL;


$choix=$_POST['option'];
//echo $_POST['option'];
switch ($choix) {
    case "chercherClient":
    
        $toto = new client_DAO;
		$faireplaisiranathalie= $toto->cherche_Client($_POST['numeroclient']);
		require_once '../views/adminResult.php';
        break;

    case "ListeClient":

       	$maliste=new client_DAO;
		$listeClient =  $maliste->Liste_Client();
		require_once '../views/Admin_ListeClient.php';
        break;

    case 2:
        echo "i égal 2";
        break;
}

	

	//$listeAccessoire = new accessoire_DAO();
	//$listeAcc = $listeAccessoire->affAccessoire();
	//var_dump($listeAcc);
	//require_once '../views/affAccessoire.php';
		
?>