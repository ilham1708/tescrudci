<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_mhs extends CI_Model {

	function getDataMahasiswa()  {
		$query = $this->db->get('mahasiswa');
		return $query->result();
	}

	function insertDataMahasiswa($data)  {
		$this->db->insert('mahasiswa', $data);
	}

	function getDataMahasiswaDetail($nim)  {
		$this->db->where('nim', $nim);
		$query = $this->db->get('mahasiswa');
		return $query->row();
	}

	function updateDataMahasiswa($nim, $data)  {
		$this->db->where('nim', $nim);
		$this->db->update('mahasiswa', $data);
	}

	function deleteDataMahasiswa($nim)  {
		$this->db->where('nim', $nim);
		$this->db->delete('mahasiswa');
	}


}