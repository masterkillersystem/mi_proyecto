<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Observaciones extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('model_admin/observaciones_model');
  }

  public function index(){

    $data = array('obs' => $this->observaciones_model->listar(),);
    $this->load->view('templates/admin_header');
    $this->load->view('templates/admin_sidebar');
    $this->load->view('admin/observaciones/index',$data);
    $this->load->view('templates/admin_footer');

  }

  public function guardar(){

		$nom_observacion = $this->input->post("nombre");

				$this->form_validation->set_rules('nombre', 'Nombre de la Observacion', 'required');

		if ($this->form_validation->run()==true) {
			$data = array('nom_observaciones' => $nom_observacion,
										'estado'       => "1"
		);
			if ($this->observaciones_model->registrar($data)){
				redirect(base_url()."administrador/observaciones");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la aula");
				redirect(base_url()."administrador/observaciones");
			}
		}
		else{
			$this->guardar();
		}

	}

  public function eliminar($id){
			$data = array('estado' => "0");
    	$this->observaciones_model->editar($id,$data);
    	redirect(base_url().'administrador/observaciones');
	}

}
