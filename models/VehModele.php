<?php

class Vehmodele{
	private $vehmmod_id;
	private $vehmmod_libelle;
	

	public function getVehmmod_id(){
		return $this->vehmmod_id;
	}

	public function setVehmmod_id($vehmmod_id){
		$this->vehmmod_id = $vehmmod_id;
	}

	public function getVehmmod_libelle(){
		return $this->vehmmod_libelle;
	}

	public function setVehmmod_libelle($vehmmod_libelle){
		$this->vehmmod_libelle = $vehmmod_libelle;
	}
}
?>