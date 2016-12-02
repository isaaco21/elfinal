<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class add_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function guardarAnuncio($add){
    $this->db->insert('casas',$add);
  }

  function listarAnuncios(){
    $query = $this->db->get('casas');
    return $query->result();
  }

}
