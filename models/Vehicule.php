<?php
<<<<<<< HEAD
=======

>>>>>>> e1ab772b7ccdf889ff1724d5fa8c50a5f122af34
class Vehicule{
	private $veh_id;
	private $veh_date_achat;
	private $veh_photo;
	private $veh_nb_place;
	private $veh_assur;
	private $veh_date_mec;
	private $veh_kmage;
	private $veh_ch_fisc;
	private $veh_ch_reel;
	private $veh_cyl;
	private $type_veh_id;
	private $veh_boite_id;
	private $vehm_carb_id;
	private $veh_coul_id;
	private $vehmmod_id;
	private $veh_porte_id;
	private $typepermis_id;
<<<<<<< HEAD
=======

>>>>>>> e1ab772b7ccdf889ff1724d5fa8c50a5f122af34
	
public function getVeh_id(){
		return $this->veh_id;
	}
<<<<<<< HEAD
	public function setVeh_id($veh_id){
		$this->veh_id = $veh_id;
	}
	public function getVeh_date_achat(){
		return $this->veh_date_achat;
	}
	public function setVeh_date_achat($veh_date_achat){
		$this->veh_date_achat = $veh_date_achat;
	}
	public function getVeh_photo(){
		return $this->veh_photo;
	}
	public function setVeh_photo($veh_photo){
		$this->veh_photo = $veh_photo;
	}
	public function getVeh_nb_place(){
		return $this->veh_nb_place;
	}
	public function setVeh_nb_place($veh_nb_place){
		$this->veh_nb_place = $veh_nb_place;
	}
	public function getVeh_assur(){
		return $this->veh_assur;
	}
	public function setVeh_assur($veh_assur){
		$this->veh_assur = $veh_assur;
	}
	public function getVeh_date_mec(){
		return $this->veh_date_mec;
	}
	public function setVeh_date_mec($veh_date_mec){
		$this->veh_date_mec = $veh_date_mec;
	}
	public function getVeh_kmage(){
		return $this->veh_kmage;
	}
	public function setVeh_kmage($veh_kmage){
		$this->veh_kmage = $veh_kmage;
	}
	public function getVeh_ch_fisc(){
		return $this->veh_ch_fisc;
	}
	public function setVeh_ch_fisc($veh_ch_fisc){
		$this->veh_ch_fisc = $veh_ch_fisc;
	}
	public function getVeh_ch_reel(){
		return $this->veh_ch_reel;
	}
	public function setVeh_ch_reel($veh_ch_reel){
		$this->veh_ch_reel = $veh_ch_reel;
	}
	public function getVeh_cyl(){
		return $this->veh_cyl;
	}
	public function setVeh_cyl($veh_cyl){
		$this->veh_cyl = $veh_cyl;
	}
	public function getType_veh_id(){
		return $this->type_veh_id;
	}
	public function setType_veh_id($type_veh_id){
		$this->type_veh_id = $type_veh_id;
	}
	public function getVeh_boite_id(){
		return $this->veh_boite_id;
	}
	public function setVeh_boite_id($veh_boite_id){
		$this->veh_boite_id = $veh_boite_id;
	}
	public function getVehm_carb_id(){
		return $this->vehm_carb_id;
	}
	public function setVehm_carb_id($vehm_carb_id){
		$this->vehm_carb_id = $vehm_carb_id;
	}
	public function getVeh_coul_id(){
		return $this->veh_coul_id;
	}
	public function setVeh_coul_id($veh_coul_id){
		$this->veh_coul_id = $veh_coul_id;
	}
	public function getVehmmod_id(){
		return $this->vehmmod_id;
	}
	public function setVehmmod_id($vehmmod_id){
		$this->vehmmod_id = $vehmmod_id;
	}
	public function getVeh_porte_id(){
		return $this->veh_porte_id;
	}
	public function setVeh_porte_id($veh_porte_id){
		$this->veh_porte_id = $veh_porte_id;
	}
	public function getTypepermis_id(){
		return $this->typepermis_id;
	}
=======

	public function setVeh_id($veh_id){
		$this->veh_id = $veh_id;
	}

	public function getVeh_date_achat(){
		return $this->veh_date_achat;
	}

	public function setVeh_date_achat($veh_date_achat){
		$this->veh_date_achat = $veh_date_achat;
	}

	public function getVeh_photo(){
		return $this->veh_photo;
	}

	public function setVeh_photo($veh_photo){
		$this->veh_photo = $veh_photo;
	}

	public function getVeh_nb_place(){
		return $this->veh_nb_place;
	}

	public function setVeh_nb_place($veh_nb_place){
		$this->veh_nb_place = $veh_nb_place;
	}

	public function getVeh_assur(){
		return $this->veh_assur;
	}

	public function setVeh_assur($veh_assur){
		$this->veh_assur = $veh_assur;
	}

	public function getVeh_date_mec(){
		return $this->veh_date_mec;
	}

	public function setVeh_date_mec($veh_date_mec){
		$this->veh_date_mec = $veh_date_mec;
	}

	public function getVeh_kmage(){
		return $this->veh_kmage;
	}

	public function setVeh_kmage($veh_kmage){
		$this->veh_kmage = $veh_kmage;
	}

	public function getVeh_ch_fisc(){
		return $this->veh_ch_fisc;
	}

	public function setVeh_ch_fisc($veh_ch_fisc){
		$this->veh_ch_fisc = $veh_ch_fisc;
	}

	public function getVeh_ch_reel(){
		return $this->veh_ch_reel;
	}

	public function setVeh_ch_reel($veh_ch_reel){
		$this->veh_ch_reel = $veh_ch_reel;
	}

	public function getVeh_cyl(){
		return $this->veh_cyl;
	}

	public function setVeh_cyl($veh_cyl){
		$this->veh_cyl = $veh_cyl;
	}

	public function getType_veh_id(){
		return $this->type_veh_id;
	}

	public function setType_veh_id($type_veh_id){
		$this->type_veh_id = $type_veh_id;
	}

	public function getVeh_boite_id(){
		return $this->veh_boite_id;
	}

	public function setVeh_boite_id($veh_boite_id){
		$this->veh_boite_id = $veh_boite_id;
	}

	public function getVehm_carb_id(){
		return $this->vehm_carb_id;
	}

	public function setVehm_carb_id($vehm_carb_id){
		$this->vehm_carb_id = $vehm_carb_id;
	}

	public function getVeh_coul_id(){
		return $this->veh_coul_id;
	}

	public function setVeh_coul_id($veh_coul_id){
		$this->veh_coul_id = $veh_coul_id;
	}

	public function getVehmmod_id(){
		return $this->vehmmod_id;
	}

	public function setVehmmod_id($vehmmod_id){
		$this->vehmmod_id = $vehmmod_id;
	}

	public function getVeh_porte_id(){
		return $this->veh_porte_id;
	}

	public function setVeh_porte_id($veh_porte_id){
		$this->veh_porte_id = $veh_porte_id;
	}

	public function getTypepermis_id(){
		return $this->typepermis_id;
	}

>>>>>>> e1ab772b7ccdf889ff1724d5fa8c50a5f122af34
	public function setTypepermis_id($typepermis_id){
		$this->typepermis_id = $typepermis_id;
	}
	
	
<<<<<<< HEAD
}
=======

}

>>>>>>> e1ab772b7ccdf889ff1724d5fa8c50a5f122af34
?>