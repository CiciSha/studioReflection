<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmember extends CI_Model {
	function simpan_member($input)
	{
		$input['status_member'] = 'Belum Verifikasi';
		$input['password_member'] = sha1($input['password_member']);
		unset($input['password_conf']);
		$this->db->insert('member', $input);
	}
	function ubah_password($input,$id_member)
	{
		$input['password_member'] = sha1($input['password']);
		unset($input['password']);

		$this->db->where('id_member', $id_member);
		$this->db->update('member', $input);
	}
	function ubah_member($input,$id_member)
	{
		// $input['password_member'] = sha1($input['password']);
		unset($input['password']);
		unset($input['password_member']);

		$this->db->where('id_member', $id_member);
		$this->db->update('member', $input);
	}
	function cek_email($email)
	{
		$this->db->where('email_member', $email);
		$ambil = $this->db->get('member');
		$hasil = $ambil->num_rows();
		if ($hasil==1) 
		{
			$pecah = $ambil->row_array();
			return $pecah['id_member'];
		}
		else
		{
			return "salah";
		}
	}
	function lupa_password($password,$id)
	{
		$data['password_member'] = sha1($password);

		$this->db->where('id_member', $id);
		$this->db->update('member', $data);
	}
	

}

/* End of file Mmember.php */
/* Location: ./application/models/member/Mmember.php */