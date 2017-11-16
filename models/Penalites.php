<?php
class Penalites{
	private $penaliteId;
	private $penaliteLibelle;
	private $penaliteForfait;
	private $penaliteCoeff;
	
	public function getPenaliteId(){
		return $this->penaliteId;
	}
	public function setPenaliteId($penaliteId){
		$this->penaliteId = $penaliteId;
	}
	public function getPenaliteLibelle(){
		return $this->penaliteLibelle;
	}
	public function setPenaliteLibelle($penaliteLibelle){
		$this->penaliteLibelle = $penaliteLibelle;
	}
	public function getPenaliteForfait(){
		return $this->penaliteForfait;
	}
	public function setPenaliteForfait($penaliteForfait){
		$this->penaliteForfait = $penaliteForfait;
	}
	public function getPenaliteCoeff(){
		return $this->penaliteCoeff;
	}
	public function setPenaliteCoeff($penaliteCoeff){
		$this->penaliteCoeff = $penaliteCoeff;
	}
	
	
}
?>