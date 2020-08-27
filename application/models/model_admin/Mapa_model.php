<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapa_model extends CI_Model {

    /*listado para mostrar distrito*/
	public function listar(){
      $this->db->select("r.*, z.nom_zona as zona, ob.nom_observaciones as observacion, sb.nom_subobservaciones as subobservacion, d.nom_distrito as distrito, z.nom_zona as zona, p.nom_persona as usuario");
      $this->db->from("reclamo r");
      $this->db->join("zona z","r.zona_id = z.id_zona");
      $this->db->join("subobservaciones sb","r.subobservacion_id = sb.id_subobs");
			$this->db->join("observaciones ob","sb.observaciones_id_observaciones = ob.id_obs");
      $this->db->join("distrito d","r.distrito_id = d.id_distrito");
      $this->db->join("persona p","r.persona_users_id = p.users_id");
      /*$this->db->where("estado","1");*/
      $resultado = $this->db->get();
      return $resultado->result();
	}

	public function contador_atendidos(){
    	$this->db->select("*");
			$this->db->from("reclamo");
		  $this->db->where("atendido","1");
			$query = $this->db->get();
    return $query->num_rows();
  }

	public function contador_sinatender(){
    	$this->db->select("*");
			$this->db->from("reclamo");
		  $this->db->where("atendido","0");
			$query = $this->db->get();
    return $query->num_rows();
  }

  public function get_markers(){
		$this->db->where("reclamo.estado","1");
		$markers = $this->db->get('reclamo');
		if($markers->num_rows()>0){
			return $markers->result();
		}
	}

  /*Registro para distrito*/
	public function registrar($data){
		return $this->db->insert("registrar", $data);
	}

  /*editar para distrito*/
	public function editar($id, $data){
		$this->db->where("id_reclamo",$id);
		return $this->db->update("reclamo",$data);
	}

}
