<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct(){
				parent::__construct();
          $this->load->library(['ion_auth', 'form_validation']);
          $this->load->model("model_admin/mapa_model");
				  $this->load->model("model_admin/user_model");
	}

  public function index(){
    $this->load->view('admin/dashboard');
  }

}
