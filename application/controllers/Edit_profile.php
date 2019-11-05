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
    public function update_gambar()
    {
        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 2048;
        $this->upload->initialize($config);
        $image = "";

        $id = $this->input->post('id');
        $nama = $this->input->post('nama');

        if (!$this->upload->do_upload('foto')) {
            $image = "default.jpg";
        } else {
            $image =  $this->upload->file_name;
        }

        $data = array(
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
        $this->Profil_admin->gambar('user', $data, $where);
        $pesan['success_gambar'] = 'Gambar telah Terupdate';
        $this->load->view('header');
        $this->load->view('content/form_profile', $pesan);
        $this->load->view('footer');
    }

    public function update_password()
    {
        $id = $this->input->post('id');
        $password = md5($this->input->post('password'));
        $data = array(
            'password' => $password,
        );
        $where = array(
            'iduser' => $id
        );
        $this->Profil_admin->password('user', $data, $where);
        $pesan['success_password'] = 'Password berhasil diubah';
        $this->load->view('header');
        $this->load->view('content/form_profile', $pesan);
        $this->load->view('footer');
    }
}
