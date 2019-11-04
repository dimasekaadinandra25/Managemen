<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit_profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profil_admin');
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }
    public function index()
    {
        $this->load->view('header');
        $this->load->view('content/form_profile');
        $this->load->view('footer');
    }

    public function update()
    {
        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 2048;
        $this->upload->initialize($config);
        $image = "";

        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $password = md5($this->input->post('password'));

        if (!$this->upload->do_upload('foto')) {
            $image = "default.jpg";
        } else {
            $image =  $this->upload->file_name;
        }

        $data = array(
            'nama' => $nama,
            'password' => $password,
            'gambar' => $image
        );

        $where = array(
            'iduser' => $id
        );

        $sesdata = array(
            'id' => $id,
            'nama'  => $nama,
            'foto' => $image,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        $this->Profil_admin->update_data('user', $data, $where);
        redirect('edit_profile/');
    }
}
