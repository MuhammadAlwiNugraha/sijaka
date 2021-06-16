<?php

class Mitra_model extends CI_Model
{

	public function ubahDataProfile()
	{
		$data = [
			'nama' => $this->input->post('nama', true),
			'alamat' => $this->input->post('alamat', true),
			'email' => $this->input->post('email', true),
			'nohp' => $this->input->post('nohp', true)
			// 'image' => $this->input->post('image', true)
		];

		$this->db->where('email', $data['email']);
		$this->db->update('user', $data);

		// UPDATE user SET name,alamat,email,nohp WHERE email = email
	}
}
