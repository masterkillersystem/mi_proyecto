<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subobservaciones_model extends CI_Model {

    /*listado para mostrar distrito*/
	public function listar(){
      $this->db->select("sb.*, ob.nom_observaciones as observaciones");
      $this->db->from("subobservaciones sb");
      $this->db->join("observaciones ob","sb.obs_id = ob.id_obs");
      /*$this->db->where("estado","1");*/
      $resultado = $this->db->get();
      return $resultado->result();
	}

  /*Registro para distrito*/
	public function registrar($data){
		return $this->db->insert("subobservaciones", $data);
	}

  /*editar para distrito*/
	public function editar($id, $data){
		$this->db->where("id_subobs",$id);
		return $this->db->update("subobservaciones",$data);
	}

}
