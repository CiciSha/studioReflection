<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('member/template/Header');
		$this->load->view('member/login/Login');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/member/Home.php */