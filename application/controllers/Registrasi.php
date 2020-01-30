<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function index()
	{
		$this->load->model('member/Mmember');

		$input = $this->input->post();
		if ($input)
		{
			$this->form_validation->set_rules('username_member', 'Username', 'is_unique[member.username_member]');
			$this->form_validation->set_rules('email_member', 'Email', 'is_unique[member.email_member]');
			$this->form_validation->set_message('is_unique','%s sudah terdaftar');
			$this->form_validation->set_message('is_unique','%s sudah terdaftar');
			if ($this->form_validation->run() == TRUE) 
			{
				$this->Mmember->simpan_member($input);
				redirect('login','refresh');	
			}
		}
		$this->load->view('member/template/Header');
		$this->load->view('member/login/Registrasi');
	}



}

/* End of file Home.php */
/* Location: ./application/controllers/member/Home.php */