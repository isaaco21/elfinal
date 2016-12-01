<?php
class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','html'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        $this->load->model('user_model');
    }

    function index()
    {
        //form input
        $email = $this->input->post("email");
        $password = $this->input->post("password");

        // validacion
        $this->form_validation->set_rules("email", "Email-ID", "trim|required|xss_clean");
        $this->form_validation->set_rules("password", "Password", "trim|required|xss_clean");

        if ($this->form_validation->run() == FALSE)
        {
            // fallo de validacion
            $this->load->view('login_view');
        }
        else
        {
            // chequea las credenciales
            $uresult = $this->user_model->get_user($email, $password);
            if (count($uresult) > 0)
            {
                // sesion
                $sess_data = array('login' => TRUE, 'uname' => $uresult[0]->fname, 'uid' => $uresult[0]->id);
                $this->session->set_userdata($sess_data);
                redirect("profile/index");
            }
            else
            {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Password!</div>');
                redirect('login/index');
            }
        }
    }
}
?>
