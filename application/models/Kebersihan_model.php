<?php

class Kebersihan_model extends CI_Model
{

	public function getAllKebersihan()
	{
		$query = $this->db->get("kebersihan");
		return $query->result_array();
	}

	public function getAllKebersihanByName()
	{
		$query = $this->db->get_where("kebersihan", ['nama' =>
		$this->session->userdata("nama")]);
		return $query->result_array();
	}

	public function getAllKebersihanById($id)
	{

		$query = $this->db->get_where("kebersihan", ['id' => $id]);
		return $query->row_array();
	}

	public function tambahData()
	{

		$data = [
			'kode_transaksi' => $this->input->post('kode_transaksi', true),
			'nama' => $this->input->post('nama', true),
			'alamat' => $this->input->post('alamat', true),
			'patokan' => $this->input->post('patokan', true),
			'nohp' => $this->input->post('nohp', true),
			'kamar' => $this->input->post('kamar', true),
			'status_service' => $this->input->post('status_service', true),
			'status_pembayaran' => $this->input->post('status_pembayaran', true),
			'ulasan' => $this->input->post('ulasan', true)
		];

		$this->db->insert('kebersihan', $data);
	}

	public function ubahDataProfile()
	{
		$data = [
			'nama' => $this->input->post('nama', true),
			'alamat' => $this->input->post('alamat', true),
			'email' => $this->input->post('email', true),
			'nohp' => $this->input->post('nohp', true),

		];

		$this->db->where('email', $data['email']);
		$this->db->update('user', $data);

		// UPDATE user SET name,alamat,email,nohp WHERE email = email
	}

	public function ubahStatusbyMitra()
	{
		$data = [
			'status_service' => $this->input->post('status_service', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('kebersihan', $data);
	}

	public function paymentByMitra()
	{
		$data = [
			'status_pembayaran' => $this->input->post('status_pembayaran', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('kebersihan', $data);
	}

	public function ubahStatusbyAdmin()
	{
		$data = [
			'status_service' => $this->input->post('status_service', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('kebersihan', $data);
	}

	public function konfirmasi()
	{
		$data = [
			'status_service' => $this->input->post('konfirmasi', true),
			'ulasan' => $this->input->post('ulasan', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('kebersihan', $data);
	}

	public function ubah_pesanan()
	{
		$data = [
			'alamat' => $this->input->post('alamat', true),
			'patokan' => $this->input->post('patokan', true),
			'nohp' => $this->input->post('nohp', true),
			'kamar' => $this->input->post('kamar', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('kebersihan', $data);
	}
}
