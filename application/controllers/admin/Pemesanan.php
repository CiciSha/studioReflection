<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('admin'))
		{
			redirect('login','refresh');
		}
		$this->load->model('admin/Mpemesanan');	
	}

	public function index()
	{
		$data ['pemesanan'] = $this->Mpemesanan->tampil_pemesanan();
		// print_r($data); die;
		$this->load->view('admin/template/Header');
		$this->load->view('admin/pemesanan/Tampil_pemesanan', $data);
		$this->load->view('admin/template/Footer');
		
	}
	function reschedule($id_pemesanan)
	{
		$data['pemesanan'] = $this->Mpemesanan->ambil_pemesanan($id_pemesanan);
		$input = $this->input->post();
		if($input)
		{
			$this->Mpemesanan->reschedule($input,$id_pemesanan);
			redirect('admin/pemesanan','refresh');
		}
		$this->load->view('admin/template/Header');
		$this->load->view('admin/pemesanan/reschedule', $data);
		$this->load->view('admin/template/Footer');
	}

}

/* End of file Paket.php */
/* Location: ./application/controllers/admin/Paket.php */