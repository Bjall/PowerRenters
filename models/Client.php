<?php
	class Personne {
		private $id, $nom, $prenom, $ddn;
		public function __construct($id = 0, $nom = '', $prenom = '', $ddn = ''){
			$this->id = $id;
			$this->nom = $nom;
			$this->prenom = $prenom;
			$this->ddn = str_replace('/', '-', $ddn);
		}

		public function setNom($nom){
			$this->nom = strtoupper($nom);
		}

		public function setPrenom($prenom){
			$this->prenom = strtoupper(substr($prenom, 0, 1)).strtolower(substr($prenom, 1));
		}

		public function setDateNaissance($ddn){
			$this->ddn = $ddn;
		}

		public function getId(){
			return $this->id;
		}

		public function getNom(){
			return $this->nom;
		}

		public function getPrenom(){
			return $this->prenom;
		}

		public function getDateNaissance(){
			return $this->ddn;
		}

		public function getDateNaissanceFr(){
			$date = new DateTime($this->ddn);
			return $date->format('d/m/Y');
		}

		public function getDayDdn(){
			$date = new DateTime($this->ddn);
			return $date->format('d');
		}

		public function getMonthDdn(){
			$date = new DateTime($this->ddn);
			return $date->format('m');
		}

		public function getYearDdn(){
			$date = new DateTime($this->ddn);
			return $date->format('Y');
		}
	}
?>