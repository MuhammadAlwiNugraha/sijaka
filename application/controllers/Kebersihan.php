<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kebersihan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct(); // manggil konstruktor dari CI_Controller
		$this->load->model("Kebersihan_model");
		$this->load->library("form_validation");
	}

	public function index()
	{

		$data['judul'] = 'SiJaka';
		$data['kebersihan'] = $this->Kebersihan_model->getAllKebersihan();

		$this->load->view('templates/header', $data);
		$this->load->view('kebersihan/index', $data);
		$this->load->view('templates/footer');
	}
}
