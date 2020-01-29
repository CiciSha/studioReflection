<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmember extends CI_Model {
	function simpan_member($input)
	{
		$input['status_member'] = 'Belum Verifikasi';
		$input['password_member'] = sha1($input['password_member']);
		$this->db->insert('member', $input);
	}

	

}

/* End of file Mmember.php */
/* Location: ./application/models/member/Mmember.php */