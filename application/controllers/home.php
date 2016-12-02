<?php
class home extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
  $this->load->helper(array('url', 'html'));
  $this->load->library('session');
  $this->load->model('add_model');
 }

 function index()
 {
   $data['casas'] = $this->add_model->listarAnuncios();
   $tmp = $this->add_model->listarAnuncios();
   $this->load->view('home_view', $data);
  }

 function logout()
 {
  // destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
  redirect('home/index');
 }
}
?>
