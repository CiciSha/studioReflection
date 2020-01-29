<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('admin'))
		{
			redirect('login','refresh');
		}
		$this->load->model('admin/Mmember');
	}

	public function index()
	{
		$this->load->view('admin/template/Header');
		$this->load->view('admin/Home');
		$this->load->view('admin/template/Footer');

	}

	function logout()
	{
		session_destroy();
		redirect('login','refresh');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/admin/Home.php */