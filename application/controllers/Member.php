<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Mpaket');
	}

	public function index()
	{
		
	}
	function detail_paket($id_paket)
	{
		$data['paket'] = $this->Mpaket->ambil_detail_paket($id_paket);
		$this->load->view('member/template/Header');
		$this->load->view('member/detail_paket', $data);
		$this->load->view('member/template/Footer');
	}

}

/* End of file Member.php */
/* Location: ./application/controllers/Member.php */