<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {

  public function __construct(){
				parent::__construct();
          $this->load->model("model_admin/mapa_model");
				  $this->load->model("model_admin/user_model");
	}

  public function index(){
    $data['atendidos'] =  $this->mapa_model->contador_atendidos();
    $data['sin_atender'] =  $this->mapa_model->contador_sinatender();
    //$data['num_inspector'] =  $this->user_model->contador();

    $this->load->view('templates/admin_header');
    $this->load->view('templates/admin_sidebar');
    $this->load->view('dashboard',$data);
    $this->load->view('templates/admin_footer');


  }

}
