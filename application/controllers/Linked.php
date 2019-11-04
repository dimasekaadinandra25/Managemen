<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Linked extends CI_Controller
{
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

	public function graphic()
	{
		$this->load->view('header');
		$this->load->view('content/grafik');
		$this->load->view('footer');
	}

	public function product()
	{
		$this->load->view('header');
		$this->load->view('content/product');
		$this->load->view('footer');
	}

	public function profit()
	{
		$this->load->view('header');
		$this->load->view('content/profit');
		$this->load->view('footer');
	}

	public function print()
	{
		$this->load->view('header');
		$this->load->view('content/print');
		$this->load->view('footer');
	}
}
