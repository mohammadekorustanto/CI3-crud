<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mhs_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['mhs'] = $this->Mhs_model->getAll();
		$data['judul'] = 'Data Mahasiswa';
		$this->load->view('templates/header', $data);
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	}
	public function tambah()
	{
		$this->form_validation->set_rules('nama','Nama','required|trim',[
			'required' => 'Nama harus diisi'
		]);
		$this->form_validation->set_rules('ttl','Tempat Tanggal Lahir','required|trim',[
			'required' => 'Tempat Tanggal Lahir harus diisi'
		]);
		$this->form_validation->set_rules('alamat','Alamat','required|trim',[
			'required' => 'Alamat harus diisi'
		]);
		if($this->form_validation->run() == false){
			$data['jk'] = ['Laki-Laki','Perempuan'];
			$data['jurusan'] = ['D3 Teknik Eletronika','D3 Teknik Mesin','S1 Informatika'];
			$data['judul'] = 'Data Mahasiswa';
			$this->load->view('templates/header', $data);
			$this->load->view('home/tambah');
			$this->load->view('templates/footer');
		}else{
			$this->Mhs_model->tambah();
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
									  <strong>Data berhasil ditambahkan...</strong>
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									    <span aria-hidden="true">&times;</span>
									  </button>
									</div>');
			redirect('home');
		}
	}
	public function hapus($id)
	{
		$this->Mhs_model->hapus($id);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
									  <strong>Data berhasil dihapus...</strong>
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									    <span aria-hidden="true">&times;</span>
									  </button>
									</div>');
			redirect('home');
	}
	public function ubah($id)
	{
		$this->form_validation->set_rules('nama','Nama','required|trim',[
			'required' => 'Nama harus diisi'
		]);
		$this->form_validation->set_rules('ttl','Tempat Tanggal Lahir','required|trim',[
			'required' => 'Tempat Tanggal Lahir harus diisi'
		]);
		$this->form_validation->set_rules('alamat','Alamat','required|trim',[
			'required' => 'Alamat harus diisi'
		]);
		if($this->form_validation->run() == false){
			$data['mhs'] = $this->Mhs_model->get($id);
			$data['jk'] = ['Laki-Laki','Perempuan'];
			$data['jurusan'] = ['D3 Teknik Eletronika','D3 Teknik Mesin','S1 Informatika'];
			$data['judul'] = 'Data Mahasiswa';
			$this->load->view('templates/header', $data);
			$this->load->view('home/ubah',$data);
			$this->load->view('templates/footer');
		}else{
			$this->Mhs_model->ubah($id);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
									  <strong>Data berhasil diubah...</strong>
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									    <span aria-hidden="true">&times;</span>
									  </button>
									</div>');
			redirect('home');
		}
	}
}