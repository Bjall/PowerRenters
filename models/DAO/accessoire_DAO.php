<?php

require_once '../controllers/dbconn.php';
require_once '../models/Accessoire.php'; 

	connexion();
	class accessoire_DAO {
		function affAccessoire(){
				global $dbConn;	
				$SQLQuery='SELECT * FROM accessoire';
				$SQLResult = $dbConn->query($SQLQuery);
				//var_dump($SQLQuery);
				if ($SQLResult->rowCount() == 0){
					print('<tr><td>Aucun Accessoire!</td></tr>');
				}else{
					while ($SQLRow = $SQLResult->fetchObject()){
						$accessoire[] = new Accessoire($SQLRow->acc_id, $SQLRow->acc_libelle, $SQLRow->acc_prix_u_ht);		
					
					}
					// var_dump($SQLResult);
					// var_dump($SQLRow);
					// var_dump($accessoire);
					
					$SQLResult->closeCursor();
					return  $accessoire;
			}
	
		}
	}
?>