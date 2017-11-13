<? php
class contratLocation{
	private $contrat_id;
	private $contrat_date;
	private $contrat_lieux;
	private $contrat_date_fin;
	private $contrat_date_debut;
	private $contrat_caution;
	private $contrat_date_reservation;
	private $contrat_acompte;

	public function getContrat_id(){
		return $this->contrat_id;
	}

	public function setContrat_id($contrat_id){
		$this->contrat_id = $contrat_id;
	}

	public function getContrat_date(){
		return $this->contrat_date;
	}

	public function setContrat_date($contrat_date){
		$this->contrat_date = $contrat_date;
	}

	public function getContrat_lieux(){
		return $this->contrat_lieux;
	}

	public function setContrat_lieux($contrat_lieux){
		$this->contrat_lieux = $contrat_lieux;
	}

	public function getContrat_date_fin(){
		return $this->contrat_date_fin;
	}

	public function setContrat_date_fin($contrat_date_fin){
		$this->contrat_date_fin = $contrat_date_fin;
	}

	public function getContrat_date_debut(){
		return $this->contrat_date_debut;
	}

	public function setContrat_date_debut($contrat_date_debut){
		$this->contrat_date_debut = $contrat_date_debut;
	}

	public function getContrat_caution(){
		return $this->contrat_caution;
	}

	public function setContrat_caution($contrat_caution){
		$this->contrat_caution = $contrat_caution;
	}

	public function getContrat_date_reservation(){
		return $this->contrat_date_reservation;
	}

	public function setContrat_date_reservation($contrat_date_reservation){
		$this->contrat_date_reservation = $contrat_date_reservation;
	}

	public function getContrat_acompte(){
		return $this->contrat_acompte;
	}

	public function setContrat_acompte($contrat_acompte){
		$this->contrat_acompte = $contrat_acompte;
	}
}
?>