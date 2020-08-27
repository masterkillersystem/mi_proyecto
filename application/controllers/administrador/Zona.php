<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zona extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('model_admin/zona_model');
  }

  public function index(){

    $data = array('zona' => $this->zona_model->listar(),);
    $this->load->view('templates/admin_header');
    $this->load->view('templates/admin_sidebar');
    $this->load->view('admin/zona/index',$data);
    $this->load->view('templates/admin_footer');

  }

  public function guardar(){
		$nom_zona = $this->input->post("nombre");
		$descripcion  = $this->input->post("descripcion");

				$this->form_validation->set_rules('nombre', 'Nombre de la Zona', 'required');
	      $this->form_validation->set_rules('descripcion', 'Descripcion', 'required');

		if ($this->form_validation->run()==true) {
			$data = array('nom_zona'     => $nom_zona,
										'descripcion'  => $descripcion,
										'estado'       => "1"
		);
			if ($this->zona_model->registrar($data)){
				redirect(base_url()."administrador/zona");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la zona");
				redirect(base_url()."administrador/zona");
			}
		}
		else{
			$this->guardar();
		}

	}

  public function eliminar($id){
			$data = array('estado' => "0");
    	$this->zona_model->editar($id,$data);
    	redirect(base_url().'administrador/zona');
	}

}
