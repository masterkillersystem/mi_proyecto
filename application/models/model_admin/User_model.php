<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    /*listado para mostrar usuario*/
	public function listar(){
		$this->db->select("i.*, g.nombre as cargo");
		$this->db->from("inspector i");
		$this->db->join("grupo g","i.group_id = g.id_group");
		/*$this->db->where("estado","1");*/
		$resultado = $this->db->get();
		return $resultado->result();
	}

	public function contador(){
    $query = $this->db->get("inspector");
    return $query->num_rows();
  }

	public function registrar($data){
  		return $this->db->insert("inspector", $data);
  }

}
