<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	public function index()
	{
		$this->load->view('member/template/Header');
		$this->load->view('member/Tentang');
		$this->load->view('member/template/Footer');
	}



}

/* End of file Home.php */
/* Location: ./application/controllers/member/Home.php */