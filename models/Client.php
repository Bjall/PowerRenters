<?php

class Client{
	/*private $cli_id;
	private $cli_nom;
	private $cli_prenom;
	private	$cli_date_naissance;
	private $cli_permis_numero;
	private $cli_mail;
	private $cli_civ_id;
	private $cli_mdp;
	private $cli_stat_id;
	private $date_permis;
	private $typepermis_id;*/
	
	private $cli_civ_denomination;
	private $cli_date_naissance;
	private $cli_id;
	private $cli_mail;
	private $cli_nom;
	private $cli_permis_numero;
	private $cli_prenom;
	private $cli_stat_libelle;
	private $adresse_l1;
	private $adresse_l2 ;
	private $adresse_l3; 
	private $cp_codepostal;
	private $cp_ville;
		
	function __construct ($cli_civ_denomination='',$cli_date_naissance='',$cli_id='',$cli_mail='',$cli_nom='',$cli_permis_numero='0',$cli_prenom='',$cli_stat_libelle='',$adresse_l1=' ',$adresse_l2=' ',$adresse_l3=' ',$cp_codepostal='0',$cp_ville=' '){
		$this->cli_civ_denomination=$cli_civ_denomination;
		$this->cli_date_naissance=$cli_date_naissance;
		$this->cli_id=$cli_id;
		$this->cli_mail=$cli_mail;
		$this->cli_nom=$cli_nom;
		$this->cli_permis_numero=$cli_permis_numero;
		$this->cli_prenom=$cli_prenom;
		$this->cli_stat_libelle=$cli_stat_libelle;
		$this->adresse_l1=$adresse_l1;
		$this->adresse_l2 =$adresse_l2;
		$this->adresse_l3=$adresse_l3;
		$this->cp_codepostal=$cp_codepostal;
		$this->cp_ville=$cp_ville;
	}

	public function getCli_civ_denomination(){
		return $this->cli_civ_denomination;
	}

	public function setCli_civ_denomination($cli_civ_denomination){
		$this->cli_civ_denomination = $cli_civ_denomination;
	}

	public function getCli_date_naissance(){
		return $this->cli_date_naissance;
	}

	public function setCli_date_naissance($cli_date_naissance){
		$this->cli_date_naissance = $cli_date_naissance;
	}

	public function getCli_id(){
		return $this->cli_id;
	}

	public function setCli_id($cli_id){
		$this->cli_id = $cli_id;
	}

	public function getCli_mail(){
		return $this->cli_mail;
	}

	public function setCli_mail($cli_mail){
		$this->cli_mail = $cli_mail;
	}

	public function getCli_nom(){
		return $this->cli_nom;
	}

	public function setCli_nom($cli_nom){
		$this->cli_nom = $cli_nom;
	}

	public function getCli_permis_numero(){
		return $this->cli_permis_numero;
	}

	public function setCli_permis_numero($cli_permis_numero){
		$this->cli_permis_numero = $cli_permis_numero;
	}

	public function getCli_prenom(){
		return $this->cli_prenom;
	}

	public function setCli_prenom($cli_prenom){
		$this->cli_prenom = $cli_prenom;
	}

	public function getCli_stat_libelle(){
		return $this->cli_stat_libelle;
	}

	public function setCli_stat_libelle($cli_stat_libelle){
		$this->cli_stat_libelle = $cli_stat_libelle;
	}

	public function getAdresse_l1(){
		return $this->adresse_l1;
	}

	public function setAdresse_l1($adresse_l1){
		$this->adresse_l1 = $adresse_l1;
	}

	public function getAdresse_l2(){
		return $this->adresse_l2;
	}

	public function setAdresse_l2($adresse_l2){
		$this->adresse_l2 = $adresse_l2;
	}

	public function getAdresse_l3(){
		return $this->adresse_l3;
	}

	public function setAdresse_l3($adresse_l3){
		$this->adresse_l3 = $adresse_l3;
	}

	public function getCp_codepostal(){
		return $this->cp_codepostal;
	}

	public function setCp_codepostal($cp_codepostal){
		$this->cp_codepostal = $cp_codepostal;
	}

	public function getCp_ville(){
		return $this->cp_ville;
	}

	public function setCp_ville($cp_ville){
		$this->cp_ville = $cp_ville;
	}
}
