<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    function index()
    {
        $this->load->view('header');
        $this->load->view('content/login');
    }

    function auth()
    {
        $username = $this->input->post('username', TRUE);
        $password = ($this->input->post('password', TRUE));
        $validate = $this->login_model->validate($username, $password);
        if ($validate->num_rows() > 0) {
            $data  = $validate->row_array();
            $name  = $data['nama'];
            $sesdata = array(
                'nama'  => $name,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            redirect('linked/graphic');
        } else {
            $this->index();
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
