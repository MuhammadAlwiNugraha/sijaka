<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct(); // manggil konstruktor dari CI_Controller
		$this->load->model("Kebersihan_model");
	}

	public function index()
	{
		$data['judul'] = 'SiJaka';

		$data['kebersihan'] = $this->Kebersihan_model->getAllKebersihan();

		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}
}
