<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_mhs');
	}
	public function index()
	{
		$querySemuaMhs = $this->Model_mhs->getDataMahasiswa();
		$DATA = array('queryAllMhs' => $querySemuaMhs);
		$this->load->view('home', $DATA);
	}

	public function halaman_tambah()
	{
		$this->load->view('halaman_tambah_mhs');
	}

	public function halaman_edit($nim)
	{
		$queryDetailMahasiswa = $this->Model_mhs->getDataMahasiswaDetail($nim);
		$DATA = array('queryDetailMhs' => $queryDetailMahasiswa);
		$this->load->view('halaman_edit_mhs', $DATA);
	}

		public function fungsiTambah()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');

		$ArrTambah = array(
			'nim' => $nim,
			'nama' => $nama,
			'jurusan' => $jurusan
		);
		
		$this->Model_mhs->insertDataMahasiswa($ArrTambah);
		redirect(base_url(''));
	}

	public function fungsiEdit()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');

		$ArrEdit = array(
			'nama' => $nama,
			'jurusan' => $jurusan
		);
		
		$this->Model_mhs->updateDataMahasiswa($nim, $ArrEdit);
		redirect(base_url(''));
	}
	public function fungsiDelete($nim)
	{
		$this->Model_mhs->deleteDataMahasiswa($nim);
		redirect(base_url(''));
	}
}
