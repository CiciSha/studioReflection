<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpemesanan extends CI_Model {

	function tampil_pemesanan()
	{
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('member', 'member.id_member=pemesanan.id_member', 'left');
		$this->db->join('tipe_paket', 'tipe_paket.id_tipe_paket = pemesanan.id_tipe_paket');
		$this->db->join('detail_studio', 'detail_studio.id_detail_studio = pemesanan.id_detail_studio');
		$this->db->join('studio', 'studio.id_studio = detail_studio.id_studio');


		$ambil = $this->db->get();
		return $ambil->result_array();

	}

	function ambil_pemesanan($id_pemesanan)
	{
		$this->db->where('id_pemesanan', $id_pemesanan);
		$ambil = $this->db->get('pemesanan');
		return $ambil->row_array();
	}

	function reschedule($input, $id_pemesanan)
	{
		$this->db->where('id_pemesanan', $id_pemesanan);
		$this->db->update('pemesanan', $input);
	}
	

}

/* End of file Mpaket.php */
/* Location: ./application/models/Mpaket.php */