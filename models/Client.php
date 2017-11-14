<?php

class Client{
	private $cli_id;
	private $cli_nom;
	private $cli_prenom;
	private	$cli_date_naissance;
	private $cli_permis_numero;
	private $cli_mail;
	private $cli_civ_id;
	private $cli_mdp;
	private $cli_stat_id;
	private $date_permis;
	private $typepermis_id;

	public function getCli_id(){
		return $this->cli_id;
	}

	public function setCli_id($cli_id){
		$this->cli_id = $cli_id;
	}

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