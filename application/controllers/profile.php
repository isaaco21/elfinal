<?php
class profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','html'));
		$this->load->library('session');
		$this->load->database();
		$this->load->model('user_model');
		$this->load->model('add_model');
	}

	function index()
	{
		$details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
		$data['casas'] = $this->add_model->listarAnuncios();
		$tmp = $this->add_model->listarAnuncios();
		$data['uname'] = $details[0]->fname . " " . $details[0]->lname;
		$data['uemail'] = $details[0]->email;
		$this->load->view('profile_view', $data);
	}
}
