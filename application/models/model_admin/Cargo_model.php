<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargo_model extends CI_Model {
    /*listado para mostrar distrito*/
	public function listar(){
		/*$this->db->where("estado","1");*/
		$resultado = $this->db->get("grupo");
		return $resultado->result();
	}

}
