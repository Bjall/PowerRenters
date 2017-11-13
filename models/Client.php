<?php

class Client{
	private $cli_nom;
	private $cli_prenom;
	private	$cli_date_naissance;
	private $cli_permis_numero;
	private $cli_mail;
	private $cli_civ_id;
	private $cli_mdp;
	private $cli_stat_id;
	private $adresse_l1;
	private $adresse_l2;
	private $adresse_l3;
	private $cp_id;
	private $cli_id;
	private $type_adr_id;
	private $cli_id;
	private $date_permis;
	private $typepermis_id;	
	//rajouter fonction calcul âge

	
	public function getCli_nom(){
		return $this->cli_nom;
	}

	public function setCli_nom($cli_nom){
		$this->cli_nom = $cli_nom;
	}

	public function getCli_prenom(){
		return $this->cli_prenom;
	}

	public function setCli_prenom($cli_prenom){
		$this->cli_prenom = $cli_prenom;
	}

	public function getCli_date_naissance(){
		return $this->cli_date_naissance;
	}

	public function setCli_date_naissance($cli_date_naissance){
		$this->cli_date_naissance = $cli_date_naissance;
	}

	public function getCli_permis_numero(){
		return $this->cli_permis_numero;
	}

	public function setCli_permis_numero($cli_permis_numero){
		$this->cli_permis_numero = $cli_permis_numero;
	}

	public function getCli_mail(){
		return $this->cli_mail;
	}

	public function setCli_mail($cli_mail){
		$this->cli_mail = $cli_mail;
	}

	public function getCli_civ_id(){
		return $this->cli_civ_id;
	}

	public function setCli_civ_id($cli_civ_id){
		$this->cli_civ_id = $cli_civ_id;
	}

	public function getCli_mdp(){
		return $this->cli_mdp;
	}

	public function setCli_mdp($cli_mdp){
		$this->cli_mdp = $cli_mdp;
	}

	public function getCli_stat_id(){
		return $this->cli_stat_id;
	}

	public function setCli_stat_id($cli_stat_id){
		$this->cli_stat_id = $cli_stat_id;
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

	public function getCp_id(){
		return $this->cp_id;
	}

	public function setCp_id($cp_id){
		$this->cp_id = $cp_id;
	}

	public function getCli_id(){
		return $this->cli_id;
	}

	public function setCli_id($cli_id){
		$this->cli_id = $cli_id;
	}

	public function getType_adr_id(){
		return $this->type_adr_id;
	}

	public function setType_adr_id($type_adr_id){
		$this->type_adr_id = $type_adr_id;
	}

	public function getCli_id(){
		return $this->cli_id;
	}

	public function setCli_id($cli_id){
		$this->cli_id = $cli_id;
	}

	public function getDate_permis(){
		return $this->date_permis;
	}

	public function setDate_permis($date_permis){
		$this->date_permis = $date_permis;
	}

	public function getTypepermis_id(){
		return $this->typepermis_id;
	}

	public function setTypepermis_id($typepermis_id){
		$this->typepermis_id = $typepermis_id;
	}
	

}

?>