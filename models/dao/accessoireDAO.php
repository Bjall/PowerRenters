
<?php
	require_once('../controllers/dbConn.php');
	require_once('../models/Accessoire.php'); 

	connexion();

	class accessoire_DAO {

		function affAccessoire() {
			global $dbConn;
			$SQLQuery='SELECT * FROM accessoire';
			$SQLResult = $dbConn->query($SQLQuery);
			
			if ($SQLResult->rowCount() == 0) {
				print('<tr><td>Aucun Accessoire!</td></tr>');

			} else {
				while ($SQLRow = $SQLResult->fetchObject()) {
					$accessoire[] = new Accessoire($SQLRow->acc_id, $SQLRow->acc_libelle, $SQLRow->acc_prix_u_ht);		
				}

				$SQLResult->closeCursor();
				return  $accessoire;
			}
		}
	}