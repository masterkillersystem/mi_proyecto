<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zona_model extends CI_Model {

    /*listado para mostrar distrito*/
	public function listar(){
		/*$this->db->where("estado","1");*/
		$resultado = $this->db->get("zona");
		return $resultado->result();
	}

  /*Registro para distrito*/
	public function registrar($data){
		return $this->db->insert("zona", $data);
	}

  /*editar para distrito*/
	public function editar($id, $data){
		$this->db->where("id_zona",$id);
		return $this->db->update("zona",$data);
	}

}
