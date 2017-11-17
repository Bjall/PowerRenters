<?php
	require_once '../controllers/dbconn.php';
	require_once '../models/Client.php';  
	require_once '../models/ContratLocation.php';
	require_once '../models/Vehicule.php';
	require_once '../models/VehModele.php';

	class contrats_DAO {

	/*	function  Liste_Contrats() { 
		global $dbConn;

		$SQLQuery ='select contrat_id, contrat_date_reservation, contrat_date_debut, contrat_date_fin, cli_nom, cli_prenom, vehmmod_libelle, veh.veh_id
		from contratdelocation co 
		inner join client cl on cl.cli_id=co.cli_id 
		inner join vehicule veh on veh.veh_id=co.veh_id 
		inner join vehm_modele vm on veh.vehmmod_id=vm.vehmmod_id;';
		$SQLResult = $dbConn->query($SQLQuery);
		if ($SQLResult->rowCount() == 0){
		print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		}else{
		$SQLRow = $SQLResult->fetchObject();
		while($SQLRow = $SQLResult->fetchObject()){
		$monContrat[] = new contratLocation($SQLRow->contrat_id, $SQLRow->contrat_date_reservation, $SQLRow->contrat_date_debut, $SQLRow->contrat_date_fin);
		}

		$SQLResult->closeCursor();
		return  $monContrat;

		}

		}*/

	/*	function  Recherche_Contrats($id) { 
		try{
		$dbConn = new PDO('mysql:host=localhost;port=3307;charset=utf8;dbname=powerrenters', 'root', 'root');
		}catch (Exception $ex){
		print($ex->getMessage());
		}*/

		function  cherche_Contrat($id) { 
			
			global $dbConn;	
			$SQLQuery ='SELECT contrat_id, contrat_date_reservation, contrat_date_debut, contrat_date_fin, cli_nom, cli_prenom, vehmmod_libelle, veh.veh_id from contratdelocation co inner join client cl on cl.cli_id=co.cli_id inner join vehicule veh on veh.veh_id=co.veh_id inner join vehm_modele vm on veh.vehmmod_id = vm.vehmmod_id where contrat_id=:contratnumero';
			$SQLResult = $dbConn->prepare($SQLQuery);
			$SQLResult->bindValue(':contratnumero', $id);
			$SQLResult->execute();	
			$SQLRow = $SQLResult->fetchObject();
			$ContratLocation = new ContratLocation($SQLRow->contrat_id,$SQLRow->contrat_date_reservation,$SQLRow->contrat_date_debut,$SQLRow->contrat_date_fin);	
			$SQLResult->closeCursor();

			return $ContratLocation;	
		}
			
					
		/*$SQLQuery ='select contrat_id, contrat_date_reservation, contrat_date_debut, contrat_date_fin, cli_nom, cli_prenom, vehmmod_libelle, veh.veh_id
		from contratdelocation co 
		right join client cl on cl.cli_id=co.cli_id 
		left join vehicule veh on veh.veh_id=co.veh_id 
		left join vehm_modele vm on veh.vehmmod_id=vm.vehmmod_id
		where contrat_id=4';

		$SQLResult = $dbConn->query($SQLQuery);
		if ($SQLResult->rowCount() == 0){
		print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		}else{
		/*$SQLResult->bindValue(':numcontrat', $id);	
		/*		$SQLResult->execute();
		$SQLRow = $SQLResult->fetchObject();
		while($SQLRow = $SQLResult->fetchObject()){
		$monContrat = new contratLocation($SQLRow->contrat_id, $SQLRow->contrat_date_reservation, $SQLRow->contrat_date_debut, $SQLRow->contrat_date_fin);
		}
		var_dump($monContrat);
		/*var_dump ($SQLRow);*/
		/*var_dump($SQLRow );
		$SQLResult->closeCursor();
		return  $monContrat;

		}*/

		/*}*/
	}