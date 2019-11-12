<?php 
//Controlador de la vista de enfermedad (maestra)

class ENFERMEDAD extends CONTROLADOR {
	public function __construct() {
		parent::__construct();			
	}

	public function Renderizado_Principal() {
		$this->vista->Renderizar(strtolower(__CLASS__) . '/index');
	}

	public function Registrar() {
		$this->vista->Renderizar(strtolower(__CLASS__) . '/registrar');
	}

	public function Consultar() {
		$this->vista->Renderizar(strtolower(__CLASS__) . '/consultar');
	}
}