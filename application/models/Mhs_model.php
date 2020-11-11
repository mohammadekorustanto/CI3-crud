<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mhs_model extends CI_Model{
	public function getAll()
	{
		return $this->db->get('mahasiswa')->result_array();
	}
	public function get($id)
	{
		return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
	}
	public function tambah()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'ttl' => $this->input->post('ttl'),
			'jk' => $this->input->post('jk'),
			'alamat' => $this->input->post('alamat'),
			'jurusan' => $this->input->post('jurusan'),
		];
		$this->db->insert('mahasiswa', $data);
	}
	public function ubah($id)
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'ttl' => $this->input->post('ttl'),
			'jk' => $this->input->post('jk'),
			'alamat' => $this->input->post('alamat'),
			'jurusan' => $this->input->post('jurusan'),
		];
		$this->db->where(['id' => $this->input->post('id')]);
		$this->db->update('mahasiswa', $data);
	}
	public function hapus($id)
	{
		$this->db->delete('mahasiswa', ['id' => $id]);
	}
}