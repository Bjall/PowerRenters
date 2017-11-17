<?php
	require_once('../controllers/dbConn.php');
	require_once('../models/Client.php'); 
	require_once('../models/Adresse.php'); 

	class client_DAO {

		function  Liste_Client() { 

			global $dbConn;	
			$SQLQuery ='call SP_Liste_Client()';
			$SQLResult = $dbConn->query($SQLQuery);
			
			if ($SQLResult->rowCount() == 0) {
				print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
			} else {
				while ($SQLRow = $SQLResult->fetchObject()) {
					$client[] = new client($SQLRow->cli_civ_denomination,$SQLRow->cli_date_naissance,$SQLRow->cli_id,$SQLRow->cli_mail,$SQLRow->cli_nom,$SQLRow->cli_permis_numero,$SQLRow->cli_prenom,
			
					$SQLRow->cli_stat_libelle,$SQLRow->adresse_l1,$SQLRow->adresse_l2,$SQLRow->adresse_l3,$SQLRow->cp_codepostal,$SQLRow->cp_ville);
				}

			$SQLResult->closeCursor();
			return  $client;
			}	
		}

		function  cherche_Client($id) { 

			global $dbConn;	
			$SQLQuery ='select cli_civ_denomination, cli_date_naissance, cl.cli_id, cli_mail, cli_nom, cli_permis_numero, cli_prenom,cli_stat_libelle, adresse_l1, adresse_l2, adresse_l3, cp_codepostal, cp_ville 
						from civilite ci right outer join client cl on cl.cli_civ_id=ci.cli_civ_id 
						left outer join statut_client sc on cl.cli_stat_id=sc.cli_stat_id 
						left outer join adresse a on cl.cli_id=a.cli_id 
						left outer join cpville cp on cp.cp_id=a.cp_id where cl.cli_id=:idpers';
			$SQLResult = $dbConn->prepare($SQLQuery);
			$SQLResult->bindValue(':idpers', $id);
			$SQLResult->execute();	
			$SQLRow = $SQLResult->fetchObject();
			$Client = new Client($SQLRow->cli_civ_denomination,$SQLRow->cli_date_naissance,$SQLRow->cli_id,$SQLRow->cli_mail,$SQLRow->cli_nom,$SQLRow->cli_permis_numero,$SQLRow->cli_prenom,
			$SQLRow->cli_stat_libelle,$SQLRow->adresse_l1,$SQLRow->adresse_l2,$SQLRow->adresse_l3,$SQLRow->cp_codepostal,$SQLRow->cp_ville);

			$SQLResult->closeCursor();
			return $Client;
		}	

		function  cherche_Client_nom($nom) { 

			global $dbConn;	
			$SQLQuery ='select cli_civ_denomination, cli_date_naissance, cl.cli_id, cli_mail, cli_nom, cli_permis_numero, cli_prenom,cli_stat_libelle, adresse_l1, adresse_l2, adresse_l3, cp_codepostal, cp_ville 
				from civilite ci right outer join client cl on cl.cli_civ_id=ci.cli_civ_id 
				left outer join statut_client sc on cl.cli_stat_id=sc.cli_stat_id 
				left outer join adresse a on cl.cli_id=a.cli_id 
				left outer join cpville cp on cp.cp_id=a.cp_id where cl.cli_nom=:nompers';
			$SQLResult = $dbConn->prepare($SQLQuery);
			$SQLResult->bindValue(':nompers', $nom);
			$SQLResult->execute();	
			$SQLRow = $SQLResult->fetchObject();
			$Client = new Client($SQLRow->cli_civ_denomination,$SQLRow->cli_date_naissance,$SQLRow->cli_id,$SQLRow->cli_mail,$SQLRow->cli_nom,$SQLRow->cli_permis_numero,$SQLRow->cli_prenom,
			$SQLRow->cli_stat_libelle,$SQLRow->adresse_l1,$SQLRow->adresse_l2,$SQLRow->adresse_l3,$SQLRow->cp_codepostal,$SQLRow->cp_ville);	

			$SQLResult->closeCursor();	
			return $Client;
		}
	}