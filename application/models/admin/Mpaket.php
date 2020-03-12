<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpaket extends CI_Model {

	public function getAllPaket() 
	{
		$ambil = $this->db->get("paket");
		return $ambil->result_array();
	}
	function ambil_paket($id_paket)
	{
		$this->db->where('id_paket', $id_paket);
		$ambil_paket = $this->db->get('paket');
		return $ambil_paket->row_array();
	}
	function simpan_paket($input)
	{
		$config['upload_path']          = './assets/image/paket';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

        // 2. memanggil library upload
		$this->load->library('upload', $config);
        // panggil function untuk upload
		$foto= $this->upload->do_upload("foto_paket");
		if($foto)
		{
			$input['foto_paket'] = $this->upload->data("file_name");

        //  ssimpan data ke db
			$this->db->insert('paket', $input);
		}
		else
		{
			$this->db->insert('paket', $input);
		}
	}


	function ambil_detail_paket($id_paket)
	{
		
		$this->db->where('tipe_paket.id_paket', $id_paket);
		$this->db->join('paket', 'tipe_paket.id_paket = paket.id_paket', 'left');
		$ambil = $this->db->get('tipe_paket');
		return $ambil->result_array();
	}

	function simpan_detail_paket($input,$id_paket) //belum bisa jalan
	{
		$input['id_paket']=$id_paket;
		// $input['id_paket'] = $id_paket;
		$config['upload_path']          = './assets/image/tipe';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

        // 2. memanggil library upload
		$this->load->library('upload', $config);
        // panggil function untuk upload
		$foto= $this->upload->do_upload("foto_tipe_paket");
		if($foto)
		{
			$input['foto_tipe_paket'] = $this->upload->data("file_name");

        //  ssimpan data ke db
			$this->db->insert('tipe_paket', $input);
		}
		else
		{
			$this->db->insert('tipe_paket', $input);
		}
	}

	function ubah_paket($input,$id_paket)
	{
		$config['upload_path'] = './assets/image/paket/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';


		$this->load->library('upload', $config);


		$mengupload = $this->upload->do_upload("foto_paket");
		if ($mengupload) 
		{
			$detail = $this->ambil_paket($id_paket);
			$foto_hapus = $detail['foto_paket'];
			if ($foto_hapus) 
			{
				unlink("./assets/image/paket/$foto_hapus");
			}

			$input['foto_paket'] = $this->upload->data("file_name");
			$this->db->where('id_paket', $id_paket);
			$this->db->update('paket', $input);
		}
		else
		{
			$this->db->where('id_paket', $id_paket);
			$this->db->update('paket', $input);
		}
	}
	function ambil_tipe_paket($id_tipe_paket)
	{

		$this->db->where('id_tipe_paket', $id_tipe_paket);
		$this->db->join('paket', 'tipe_paket.id_paket = paket.id_paket', 'left');
		$ambil = $this->db->get('tipe_paket');
		return $ambil->row_array();
	}
	function ubah_tipe_paket($input,$id_tipe_paket)
	{
		$config['upload_path'] = './assets/image/tipe/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';


		$this->load->library('upload', $config);


		$mengupload = $this->upload->do_upload("foto_tipe_paket");
		if ($mengupload) 
		{
			$detail = $this->ambil_tipe_paket($id_tipe_paket);
			$foto_hapus = $detail['foto_tipe_paket'];
			if ($foto_hapus) 
			{
				unlink("./assets/image/tipe/$foto_hapus");
			}

			$input['foto_tipe_paket'] = $this->upload->data("file_name");
			$this->db->where('id_tipe_paket', $id_tipe_paket);
			$this->db->update('tipe_paket', $input);
		}
		else
		{
			$this->db->where('id_tipe_paket', $id_tipe_paket);
			$this->db->update('tipe_paket', $input);
		}

	}
	function simpan_paket_studio($id_tipe_paket,$input)
	{
		foreach ($input['id_studio'] as $key => $value) 
		{
			$inputan['id_studio'] = $value;
			$inputan['id_tipe_paket'] = $id_tipe_paket;
			$this->db->insert('paket_studio', $inputan);
		}
	}
	function ambil_paket_studio($id_tipe_paket)
	{
		$this->db->join('studio', 'paket_studio.id_studio = studio.id_studio', 'left');
		$this->db->where('paket_studio.id_tipe_paket', $id_tipe_paket);
		$ambil = $this->db->get('paket_studio');
		return $ambil->result_array();
	}
	function cek_jumlah_orang($id_tipe_paket)
	{
		$this->db->where('id_tipe_paket', $id_tipe_paket);
		$ambil = $this->db->get('tipe_paket');
		return $ambil->row_array();
	}
	function simpan_reservasi_paket($input)
	{
		$pemesanan['id_member'] =  $_SESSION['member']['id_member'];
		$pemesanan['id_tipe_paket'] = $input['id_tipe_paket'];
		$pemesanan['kode_pemesanan'] =  RandomString();
		$pemesanan['tanggal_pemesanan'] = date("Y-m-d");
		$pemesanan['tanggal_booking'] = $input['tanggal_booking'];
		$pemesanan['status_pemesanan'] = "Pending";
		$pemesanan['jumlah_orang'] = $input['jumlah_orang'];
		$pemesanan['total_bayar'] = $input['total_bayar'];

		$this->db->insert('pemesanan', $pemesanan);
		$id_pemesanan = $this->db->insert_id();

		$hitung = count($input['id_detail_studio']);

		if ($hitung==1) 
		{
			$detail['id_pemesanan'] = $id_pemesanan;
			$detail['id_detail_studio'] = $input['id_detail_studio']; 
			$this->db->insert('detail_pemesanan', $detail);
		} 
		else 
		{
			foreach ($input['id_detail_studio'] as $key => $value) 
			{
				$detail['id_pemesanan'] = $id_pemesanan;
				$detail['id_detail_studio'] = $value; 
				$this->db->insert('detail_pemesanan', $detail);
			}
		}
		

		unset($input['id']);
		unset($input['id_studio']);
		unset($input['harga_tambahan']);
	}
}

/* End of file Mpaket.php */
/* Location: ./application/models/Mpaket.php */