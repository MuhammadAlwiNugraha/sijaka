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

	public function message()
	{
		$db = mysqli_connect('localhost', 'root', '', 'sijakaa');
		$getMesg = mysqli_real_escape_string($db, $_POST['text']);

		//checking user query to database query
		$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
		$run_query = mysqli_query($db, $check_data) or die("Error");

		// if user query matched to database query we'll show the reply otherwise it go to else statement
		if (mysqli_num_rows($run_query) > 0) {
			//fetching replay from the database according to the user query
			$fetch_data = mysqli_fetch_assoc($run_query);
			//storing replay to a varible which we'll send to ajax
			$replay = $fetch_data['replies'];
			echo $replay;
		} else {
			echo "maaf kami gak ngerti maksud kmu -/\-";
		}
	}
}
