<?php

class Admin_model extends CI_Model
{

	public function getAllUser()
	{
		$query = $this->db->get("user");
		return $query->result_array();
	}

	public function getAllKebersihan()
	{
		$query = $this->db->get("kebersihan");
		return $query->result_array();
	}

	public function getAllKebersihanById($id)
	{
		$query = $this->db->get_where("kebersihan", ['id' => $id]);
		return $query->row_array();
	}

	public function getAllUserById($id)
	{
		$query = $this->db->get_where("user", ['id' => $id]);
		return $query->row_array();
	}

	public function ubahStatusbyAdmin()
	{
		$data = [
			'status_service' => $this->input->post('status_service', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('kebersihan', $data);
	}

	public function ubahUserbyAdmin()
	{
		$data = [
			'role_id' => $this->input->post('role', true)
			//'is_active' => $this->input->post('aktifasi', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user', $data);
	}

	public function hapusDataOrder($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('kebersihan');
	}

	public function hapusDataUser($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user');
	}

	public function ubahDataProfile()
	{
		$data = [
			'nama' => $this->input->post('nama', true),
			'alamat' => $this->input->post('alamat', true),
			'email' => $this->input->post('email', true),
			'nohp' => $this->input->post('nohp', true)
		];

		$this->db->where('email', $data['email']);
		$this->db->update('user', $data);

		// UPDATE user SET name,alamat,email,nohp WHERE email = email
	}
}
