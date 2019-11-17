<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Linked extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mawal');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('content/menu_awal');
		$this->load->view('footer');
	}

	public function form_login()
	{
		$this->load->view('header');
		$this->load->view('content/login');
		$this->load->view('footer');
	}

	public function about()
	{
		$this->load->view('header');
		$this->load->view('content/about');
		$this->load->view('footer');
	}
}
