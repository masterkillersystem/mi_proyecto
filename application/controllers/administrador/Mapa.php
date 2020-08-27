<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapa extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('model_admin/mapa_model');
    $this->load->model('model_admin/subobservaciones_model');
    $this->load->model('model_admin/observaciones_model');
    $this->load->model('model_admin/distrito_model');
    $this->load->model('model_admin/zona_model');
    $this->load->model('model_admin/user_model');
  }

  public function index(){

    $data = array('reclamo' => $this->mapa_model->listar(),);

      //la zona del mapa que queremos mostrar al cargar el mapa.
      $config['center'] = '-16.508604, -68.166550';

      //siempre mostrará todos los markers ajustando el zoom.
      $config['zoom'] = '12';

      $config['radius'] = '1000';
      //el tipo de mapa, en el pdf podéis ver más opciones.
      $config['map_type'] = 'ROADMAP';
      //el ancho del mapa.
      $config['map_width'] = 'auto';
      //el alto del mapa.
      $config['map_height'] = '500px';

      $https ['FALSE'] = 'TRUE';
      //inicializamos la configuración del mapa.

      //hacemos la consulta al modelo para pedirle la posición de los markers y el infowindow.

      $this->googlemaps->add_circle($config);
      $this->googlemaps->initialize($config);
      $markers = $this->mapa_model->get_markers();
      foreach($markers as $info_marker){

				$marker = array();

				//podemos elegir DROP o BOUNCE.
				$marker ['animation'] = 'BOUNCE';

				//posición de los markers.
				$marker ['position'] = $info_marker->latitud.','.$info_marker->longitud;
				//infowindow de los markers(ventana de información).

				$marker['id'] = $info_marker->id_reclamo;

				$marker ['infowindow_content'] = $info_marker->fecha.'......'.$info_marker->hora;

				//la id del marker

				$this->googlemaps->add_marker($marker);
        }
				//podemos colocar iconos personalizados así de fácil
				// $marker ['icon'] = base_url('assets/img/trash.png');
				//si queremos que se pueda arrastrar el marker
				//$marker['draggable'] = TRUE;
				//si queremos darle una id, muy útil

				//en $data['datos'tenemos la información de cada marker para
				//poder utilizarlo en el sidebar en nuestra vista mapa_view
				$data['datos'] = $this->mapa_model->get_markers();
				//en data['map'] tenemos ya creado nuestro mapa para llamarlo en la vista
				$data['map'] = $this->googlemaps->create_map();
						/*$this->load->view("admin/mapa/mapa_view",$data);*/
    $this->load->view('admin/mapa/index',$data);


  }



}
