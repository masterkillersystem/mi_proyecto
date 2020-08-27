<?php
class Subobservaciones extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('model_admin/subobservaciones_model');
    $this->load->model('model_admin/observaciones_model');
  }

  public function index(){

    $data = array('subobs' => $this->subobservaciones_model->listar(),
                  'observaciones' => $this->observaciones_model->listar()
    );
    $this->load->view('templates/admin_header');
    $this->load->view('templates/admin_sidebar');
    $this->load->view('admin/sub_observaciones/index',$data);
    $this->load->view('templates/admin_footer');

  }

  public function guardar(){

		$nom_subobs = $this->input->post("nom_subobs");
    $nom_obs   = $this->input->post("obs");

				$this->form_validation->set_rules('nom_subobs', 'Nombre de la Sub Observacion', 'required');
        $this->form_validation->set_rules('obs', 'Nombre de la  Observacion', 'required');

		if ($this->form_validation->run()==true) {
			$data = array('nom_subobservaciones' => $nom_subobs,
                    'obs_id'               => $nom_obs,
										'estado'               => "1"
		);
			if ($this->subobservaciones_model->registrar($data)){
				redirect(base_url()."administrador/subobservaciones");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la aula");
				redirect(base_url()."administrador/subobservaciones");
			}
		}
		else{
			$this->index();
		}

	}

  public function eliminar($id){
			$data = array('estado' => "0");
    	$this->subobservaciones_model->editar($id,$data);
    	redirect(base_url().'administrador/subobservaciones');
	}

}
