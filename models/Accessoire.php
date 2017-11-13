<?php

class Accessoire{
	private $accessoire_id;
	private $accessoire_libelle;
	private $accessoire_prix_u_ht;

	public function getAccessoire_id(){
		return $this->accessoire_id;
	}

	public function setAccessoire_id($accessoire_id){
		$this->accessoire_id = $accessoire_id;
	}

	public function getAccessoire_libelle(){
		return $this->accessoire_libelle;
	}

	public function setAccessoire_libelle($accessoire_libelle){
		$this->accessoire_libelle = $accessoire_libelle;
	}

	public function getAccessoire_prix_u_ht(){
		return $this->accessoire_prix_u_ht;
	}

	public function setAccessoire_prix_u_ht($accessoire_prix_u_ht){
		$this->accessoire_prix_u_ht = $accessoire_prix_u_ht;
	}
	

}

?>