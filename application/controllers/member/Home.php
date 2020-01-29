<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('member/template/Header');
		$this->load->view('member/Home');
		$this->load->view('member/template/Footer');
	}

	public function tentangKami()
	{
		$this->load->view('member/template/Header');
		$this->load->view('member/Tentang');
		$this->load->view('member/template/Footer');
	}
	function logout()
	{
		session_destroy();
		redirect('member/home','refresh');
	}



}

/* End of file Home.php */
/* Location: ./application/controllers/member/Home.php */