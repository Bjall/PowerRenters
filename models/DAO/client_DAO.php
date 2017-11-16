<?php
require_once '../controllers/dbconn.php';
require_once '../models/Client.php'; 
require_once '../models/Adresse.php'; 
connexion();


class client_DAO {
		
function  Liste_Client() { 
	
			global $dbConn;	
			$SQLQuery ='call SP_Liste_Client()';
			$SQLResult = $dbConn->query($SQLQuery);
			if ($SQLResult->rowCount() != 0){
				$SQLRow = $SQLResult->fetchAll(PDO::FETCH_ASSOC);
	
<<<<<<< HEAD
	try{
		/*
		* Ouverture de la connexion à la base de données
		*/
		$dbConn = new PDO('mysql:host=localhost;charset=utf8;dbname=powerrenters', 'root', 'root');
	}catch (Exception $ex){
		/*
		 * En cas d'erreur, gestion d'une exception (à voir plus tard)
		 */
		print($ex->getMessage());
	}
			//global $dbConn;	
			$SQLQuery ='select cli_civ_denomination, cli_date_naissance, cl.cli_id, cli_mail, cli_nom, cli_permis_numero, cli_prenom,cli_stat_libelle, adresse_l1, adresse_l2, adresse_l3, cp_codepostal, cp_ville 
				from civilite ci right outer join client cl on cl.cli_civ_id=ci.cli_civ_id 
				left outer join statut_client sc on cl.cli_stat_id=sc.cli_stat_id 
				left outer join adresse a on cl.cli_id=a.cli_id 
				left outer join cpville cp on cp.cp_id=a.cp_id; where cl.cli_id=:idpers';
			$SQLResult = $dbConn->prepare($SQLQuery);
			$SQLResult->bindValue(':idpers', $id);
			$SQLResult->execute();	
			$SQLRow = $SQLResult->fetchObject();
			$Client = new Client($SQLRow->cli_civ_denomination,$SQLRow->cli_date_naissance,$SQLRow->cli_id,$SQLRow->cli_mail,$SQLRow->cli_nom,$SQLRow->cli_permis_numero,$SQLRow->cli_prenom,
			$SQLRow->cli_stat_libelle,$SQLRow->adresse_l1,$SQLRow->adresse_l2,$SQLRow->adresse_l3,$SQLRow->cp_codepostal,$SQLRow->cp_ville);	
	
			return $Client;
			
			
}	
		


=======
				$SQLResult->closeCursor();
				return  $SQLRow;
			}else{
				return null;
			}
			
		}
>>>>>>> e1ab772b7ccdf889ff1724d5fa8c50a5f122af34

/*
function Ajout_client($pers){ 
			try{			
			$req1=$this->con->prepare("call SP_Ajout_client (:v_nom,:v_prenom,:v_civ_id,:v_date_naissance,:v_mail,:v_permis_numero,:v_adresse_l1,:v_adresse_l2,:v_adresse_l3,:v_cp_id,:v_mdp,:v_stat_id,:v_type_adr_id,:v_date_permis,:v_typepermis_id)"); //avec exception(:v_nom,@errCode, @errState, @msgErreur)			
			$nom=$pers->getCli_nom();
			$prenom=$pers->getCli_prenom();
			$civ_id=$pers->getCli_civ_id();
			$date_naissance=$pers->getCli_date_naissance();
			$maile=$pers->getCli_mail();
			$permis_numero=$pers->getCli_permis_numero();
			$adresse_l1=$pers->getAdresse_l1();
			$adresse_l2=$pers->getAdresse_l2();
			$adresse_l3=$pers->getAdresse_l3();
			$cp_id=$pers->getCp_id();
			$mdp=$pers->getCli_mdp();
			$stat_id=$pers->getCli_stat_id();
			$type_adr_id=$pers->getType_adr_id();
			$date_permis=$pers->getDate_permis();
			$typepermis_id=$pers->getTypepermis_id();
			$req1->bindParam(':v_nom',$nom,PDO::PARAM_STR);
			$req1->bindParam(':v_prenom',$prenom,PDO::PARAM_STR);
			$req1->bindParam(':v_civ_id',$civ_id,PDO::PARAM_STR);
			$req1->bindParam(':v_date_naissance',$date_naissance,PDO::PARAM_STR);
			$req1->bindParam(':v_mail',$maile,PDO::PARAM_STR);
			$req1->bindParam(':v_permis_numero',$permis_numero,PDO::PARAM_STR);
			$req1->bindParam(':v_adresse_l1',$adresse_l1,PDO::PARAM_STR);
			$req1->bindParam(':v_adresse_l2',$adresse_l2,PDO::PARAM_STR);
			$req1->bindParam(':v_adresse_l3',$adresse_l3,PDO::PARAM_STR);
			$req1->bindParam(':v_cp_id',$cp_id,PDO::PARAM_STR);
			$req1->bindParam(':v_mdp',$mdp,PDO::PARAM_STR);
			$req1->bindParam(':v_stat_id,$stat_id',PDO::PARAM_STR);
			$req1->bindParam(':v_type_adr_id',$type_adr_id,PDO::PARAM_STR);
			$req1->bindParam(':v_date_permis',$date_permis,PDO::PARAM_STR);
			$req1->bindParam(':v_typepermis_id',$typepermis_id,PDO::PARAM_STR);
			$req1->execute();
			$req1->closeCursor();
			$resultat=$this->con->query("select @errCode, @errState, @msgErreur")->fetch();
					if ($resultat[0]==0) 
					{	?> 
					<script>alert ('Le poste a bien été ajouté')</script> 
				<?php					
				}				
					else
					Switch($resultat[0]){				
					case 1366 : throw new Exception('Merci de rentrer un nombre'.$resultat[1].' '.$resultat[2]);
					break;
					case 1062: throw new Exception('<h1 style="color: red">Ce poste existe déjà!</h1>');
					break;
					default : throw new Exception('Merci de contacter l\'admin '.$resultat[0].' '.$resultat[1].' '.$resultat[2]);		
					break;
					}
			}
				catch (PDOException $e) {
				echo '<br>Erreur de connexion!!! :   ' . $e->getMessage();
				}
		}
}

	*/	
		
	}
?>