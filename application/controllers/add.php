<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('add_model');
  }

  function index(){
    $data = array();
    $data['casas'] = $this->add_model->listarAnuncios();
    $tmp = $this->add_model->listarAnuncios();
    $this->load->view('add_view',$data);
  }

  function guardar($add){
    if ($_POST) {
      $this->add_model->guardarAnuncio($_add);
      $this->load->view('mensaje');
    }
  }

}
