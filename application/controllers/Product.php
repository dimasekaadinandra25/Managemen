<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mproduct');
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }
    public function index()
    {
        $config['base_url'] = site_url('product/index/');
        $config['total_rows'] = $this->db->count_all('barang');
        $config['per_page'] = 4;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['data'] = $this->Mproduct->getData($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('header');
        $this->load->view('content/product', $data);
        $this->load->view('footer');
    }

    public function form()
    {
        $data['tanggal'] = date_now();
        $this->load->view('header');
        $this->load->view('content/form_barang', $data);
        $this->load->view('footer');
    }

    public function tambah()
    {
        $config['upload_path']          = './assets/img/foto-barang/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 2048;
        $this->upload->initialize($config);

        $image = "";
        $nama_barang = $this->input->post('nama_barang');
        $stock = $this->input->post('stock');
        $last_update = $this->input->post('last_update');
        $harga = $this->input->post('harga');

        if (!$this->upload->do_upload('foto')) {
            $image = "no-image.png";
        } else {
            $image =  $this->upload->file_name;
        }

        $data = array(
            'nama_barang' => $nama_barang,
            'stok' => $stock,
            'harga' => $harga,
            'foto_barang' => $image,
            'last_update' => $last_update
        );

        $this->Mproduct->addData('barang', $data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dimasukkan');
        redirect('product/');
    }
}
