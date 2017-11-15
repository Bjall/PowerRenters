<? php
class TypeVehicule{
	private $typeVehId;
	private $typeVehLibelle;
	private $typeVehPrix;
	

	public function getTypeVehId(){
		return $this->typeVehId;
	}

	public function setTypeVehId($typeVehId){
		$this->typeVehId = $typeVehId;
	}

	public function getTypeVehLibelle(){
		return $this->typeVehLibelle;
	}

	public function setTypeVehLibelle($typeVehLibelle){
		$this->typeVehLibelle = $typeVehLibelle;
	}

	public function getTypeVehPrix(){
		return $this->typeVehPrix;
	}

	public function setTypeVehPrix($typeVehPrix){
		$this->typeVehPrix = $typeVehPrix;
	}
}
?>