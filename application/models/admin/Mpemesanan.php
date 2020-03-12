<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpemesanan extends CI_Model {

	function tampil_pemesanan()
	{
		$this->db->join('member', 'pemesanan.id_member=member.id_member', 'left');
		$this->db->order_by('id_pemesanan', 'desc');
		$ambil = $this->db->get("pemesanan");
		return $ambil->result_array();
	}

	function ambil_pemesanan($id_pemesanan)
	{
		$this->db->join('tipe_paket', 'pemesanan.id_tipe_paket = tipe_paket.id_tipe_paket', 'left');
		$this->db->join('paket', 'tipe_paket.id_paket = paket.id_paket', 'left');
		$this->db->where('id_pemesanan', $id_pemesanan);
		$ambil = $this->db->get('pemesanan');
		return $ambil->row_array();
	}

	function reschedule($input, $id_pemesanan)
	{
		$this->db->where('id_pemesanan', $id_pemesanan);
		$this->db->update('pemesanan', $input);
	}
	function tampil_pemesanan_member($id_member)
	{
		$this->db->join('tipe_paket', 'pemesanan.id_tipe_paket = tipe_paket.id_tipe_paket', 'left');
		$this->db->join('paket', 'tipe_paket.id_paket = paket.id_paket', 'left');
		$this->db->where('pemesanan.id_member', $id_member);
		$this->db->order_by('id_pemesanan', 'desc');
		$ambil = $this->db->get('pemesanan');
		return $ambil->result_array();
	}
	function simpan_pembayaran($input,$id_pemesanan)
	{
		$input['id_pemesanan']= $id_pemesanan;
		$input['tanggal_bayar']= date("Y-m-d");

		$config['upload_path']= './assets/image/pembayaran';
		$config['allowed_types']= 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);
		// panggil function untuk upload
		$foto= $this->upload->do_upload("foto_bukti_bayar");
		if($foto)
		{
			$input['jenis_pembayaran'] = "Transfer";
			$input['foto_bukti_bayar'] = $this->upload->data("file_name");

			// simpan data ke db
			$this->db->insert('pembayaran', $input);
		}

		$inputan['status_pemesanan']= "Menunggu Konfirmasi";

		$this->db->where('id_pemesanan', $id_pemesanan);
		$this->db->update('pemesanan', $inputan);

	}
	function ambil_pembayaran($id_pemesanan)
	{
		$this->db->join('pemesanan', 'pembayaran.id_pemesanan = pemesanan.id_pemesanan', 'left');
		$this->db->join('member', 'member.id_member = member.id_member', 'left');
		$this->db->where('pembayaran.id_pemesanan', $id_pemesanan);
		$this->db->order_by('id_pembayaran', 'desc');
		$ambil = $this->db->get('pembayaran');
		return $ambil->row_array();
	}
	function ubah_pemesanan($input,$id_pemesanan)
	{
		unset($input['pose']);
		unset($input['file']);
		unset($input['harga_pose']);
		unset($input['harga_file']);

		$inputan['max_pose_pemesanan'] = $input['max_pose_pemesanan'];
		$inputan['max_file_pemesanan'] = $input['max_file_pemesanan'];
		$inputan['total_tambahan'] = $input['total_tagihan'];

		$this->db->where('id_pemesanan', $id_pemesanan);
		$this->db->update('pemesanan', $inputan);

		$pembayaran['jenis_pembayaran'] = "Tunai";
		$pembayaran['jumlah_bayar'] = $input['total_tagihan'];
		$pembayaran['id_pemesanan'] = $id_pemesanan;
		$pembayaran['status_pembayaran'] = "Lunas";
		$pembayaran['tanggal_bayar'] = date("Y-m-d");
		$pembayaran['tanggal_konfirmasi'] = date("Y-m-d");

		$this->db->insert('pembayaran', $pembayaran);
	}
	function ambil_pembayaran_pemesanan($id_pemesanan)
	{
		$this->db->join('pemesanan', 'pembayaran.id_pemesanan = pemesanan.id_pemesanan', 'left');
		$this->db->where('pembayaran.id_pemesanan', $id_pemesanan);
		// $this->db->order_by('id_pembayaran', 'desc');
		$ambil = $this->db->get('pembayaran');
		return $ambil->result_array();
	}
	function simpan_testimoni($input,$id_pemesanan)
	{
		$input['id_pemesanan'] = $id_pemesanan;
		$input['tanggal_testimoni'] = date("Y-m-d");
		$input['status_testimoni'] = "Menunggu";

		$this->db->insert('testimoni', $input);
	}
	function tampil_testimoni()
	{
		$this->db->join('pemesanan', 'testimoni.id_pemesanan = pemesanan.id_pemesanan', 'left');
		$this->db->join('member', 'pemesanan.id_member = member.id_member', 'left');
		$this->db->where('status_testimoni', 'Diterima');
		$input = $this->db->get('testimoni');
		return $input->result_array();

	}

}

/* End of file Mpaket.php */
/* Location: ./application/models/Mpaket.php */