<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function indexBeranda()
	{

		if ($this->session->userdata('detailAdmin')) {
			$data["title"] = "Beranda";
			$data["semuaData"] = $this->M_FMADM->semuaData();
			$data["sidebar"] = 'beranda';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/topbar');
			$this->load->view('templates/sidebar');
			$this->load->view('admin/indexBeranda', $data);
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('Autentifikasi/indexLogin'));
		}
	}

	public function indexPerhitungan()
	{
		if ($this->session->userdata('detailAdmin')) {
			$data["semuaData"] = $this->M_FMADM->semuaData();

			if (count($data['semuaData']['dataAlternatif']) > 1) {
				$data["title"] = "Perhitungan";
				$data["FMADM"] = $this->M_FMADM->FMADM();
				$data["sidebar"] = 'perhitungan';
				$this->load->view('templates/header', $data);
				$this->load->view('templates/topbar');
				$this->load->view('templates/sidebar');
				$this->load->view('admin/indexPerhitungan', $data);
				$this->load->view('templates/footer');
			} else {
				$this->session->set_flashdata('noticeGagalHitung', 'Berhasil!');
				redirect(base_url('Admin/indexBeranda'));
			}
		} else {
			redirect(base_url('Autentifikasi/indexLogin'));
		}
	}

	public function indexPerhitunganPerankingan()
	{
		if ($this->session->userdata('detailAdmin')) {
			$data["title"] = "Perankingan";
			$data["semuaData"] = $this->M_FMADM->semuaData();
			$data["FMADM"] = $this->M_FMADM->FMADM();
			$this->M_FMADM->ranking($data["FMADM"]);
			$data["ranking"] = $this->M_FMADM->detailTabel('tabel_perankingan_sementara');
			$data["lokasi"] = $this->M_FMADM->detailTabel('tabel_lokasi');

			$data['lokasi_null'] = [];
			$i = 0;
			foreach ($data['ranking'] as $key => $value) {
				if ($value->id_lokasi == null) {
					$data['lokasi_null'][$i] = $value;
				}
				$i++;
			}

			$data["sidebar"] = 'perhitungan';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/topbar');
			$this->load->view('templates/sidebar');
			$this->load->view('admin/indexPerhitunganPerankingan', $data);
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('Autentifikasi/indexLogin'));
		}
	}

	public function indexAlternatif()
	{
		if ($this->session->userdata('detailAdmin')) {
			$data["title"] = "Beranda";
			$data["semuaData"] = $this->M_FMADM->semuaData();
			$data["sidebar"] = 'data';

			$no = 0;
			foreach ($data["semuaData"]['dataAlternatif'] as $key => $value) {
				foreach ($data["semuaData"]['dataLokasi'] as $key2 => $value2) {
					if ($value->id_lokasi == $value2->id) {
						$data["semuaData"]['dataAlternatif'][$key]->nama_lokasi = $value2->nama;
					}
				}
				$no++;
			}

			$this->load->view('templates/header', $data);
			$this->load->view('templates/topbar');
			$this->load->view('templates/sidebar');
			$this->load->view('admin/indexAlternatif', $data);
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('Autentifikasi/indexLogin'));
		}
	}

	public function indexKriteria()
	{
		if ($this->session->userdata('detailAdmin')) {
			$data["title"] = "Beranda";
			$data["semuaData"] = $this->M_FMADM->semuaData();
			$data["sidebar"] = 'data';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/topbar');
			$this->load->view('templates/sidebar');
			$this->load->view('admin/indexKriteria', $data);
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('Autentifikasi/indexLogin'));
		}
	}

	public function indexLokasi()
	{
		if ($this->session->userdata('detailAdmin')) {
			$data["title"] = "Beranda";
			$data["semuaData"] = $this->M_FMADM->semuaData();
			$data["sidebar"] = 'data';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/topbar');
			$this->load->view('templates/sidebar');
			$this->load->view('admin/indexLokasi', $data);
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('Autentifikasi/indexLogin'));
		}
	}

	public function indexAkun()
	{
		if ($this->session->userdata('detailAdmin')) {
			$data["title"] = "Beranda";
			$data["semuaData"] = $this->M_FMADM->semuaData();
			$data["sidebar"] = 'data';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/topbar');
			$this->load->view('templates/sidebar');
			$this->load->view('admin/indexAkun', $data);
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('Autentifikasi/indexLogin'));
		}
	}

	public function indexTambahDataAlternatif()
	{
		if ($this->session->userdata('detailAdmin')) {
			$data["title"] = "Tambah Data";
			$data["semuaData"] = $this->M_FMADM->semuaData();
			$data["sidebar"] = 'data';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('admin/indexTambahDataAlternatif');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexTambahDataLokasi()
	{
		if ($this->session->userdata('detailAdmin')) {
			$data["title"] = "Tambah Data";
			$data["semuaData"] = $this->M_FMADM->semuaData();
			$data["sidebar"] = 'data';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('admin/indexTambahDataLokasi');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexTambahDataAkun()
	{
		if ($this->session->userdata('detailAdmin')) {
			$data["title"] = "Tambah Data";
			$data["semuaData"] = $this->M_FMADM->semuaData();
			$data["sidebar"] = 'data';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('admin/indexTambahDataAkun');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function tambahData($tabel, $direktori, $direktoriTambahData)
	{
		if ($tabel == 'tabel_admin') {
			$duplikasi = $this->M_FMADM->antiDuplikasi($tabel, 'username', $this->input->post('username'));
		} else {
			// var_dump($this->input->post());
			// die;
			$duplikasi = $this->M_FMADM->antiDuplikasi($tabel, 'nama', $this->input->post('nama'));
		}

		if ($duplikasi == false) {
			$this->session->set_flashdata('noticeTambah', 'Berhasil!');
			$this->M_FMADM->tambahData($this->input->post(), $tabel);
		} else {
			$this->session->set_flashdata('noticeGagalTambah', 'Gagal!');
			$direktori = $direktoriTambahData;
		}
		$this->session->set_flashdata('noticeTambah', 'Berhasil!');
		redirect(base_url('Admin/' . $direktori));
	}

	public function indexUbahDataAlternatif($id)
	{
		if ($this->session->userdata('detailAdmin')) {
			$data["title"] = "Ubah Data";
			$data["semuaData"] = $this->M_FMADM->semuaData();
			$data["detailData"] = $this->M_FMADM->detailData('tabel_alternatif', 'id', $id);
			$data["sidebar"] = 'data';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('admin/indexUbahDataAlternatif');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexUbahDataLokasi($id)
	{
		if ($this->session->userdata('detailAdmin')) {
			$data["title"] = "Ubah Data";
			$data["semuaData"] = $this->M_FMADM->semuaData();
			$data["detailData"] = $this->M_FMADM->detailData('tabel_lokasi', 'id', $id);
			$data["sidebar"] = 'data';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('admin/indexUbahDataLokasi');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexUbahDataAkun($id)
	{
		if ($this->session->userdata('detailAdmin')) {
			$data["title"] = "Ubah Data";
			$data["semuaData"] = $this->M_FMADM->semuaData();
			$data["detailData"] = $this->M_FMADM->detailData('tabel_admin', 'id', $id);
			$data["sidebar"] = 'data';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('admin/indexUbahDataAkun');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function ubahData($tabel, $id, $direktori, $direktoriUbahData)
	{
		$duplikasi = false;

		if ($tabel == 'tabel_admin') {
			$duplikasi = $this->M_FMADM->antiDuplikasiUbahData($tabel, 'username', $this->input->post('username'), $id);
			// md5($this->input->post('password'));
		} else {
			$duplikasi = $this->M_FMADM->antiDuplikasiUbahData($tabel, 'nama', $this->input->post('nama'), $id);
		}

		if ($duplikasi == false) {
			$this->session->set_flashdata('noticeUbah', 'Berhasil!');
			$this->M_FMADM->ubahData($this->input->post(), $tabel, $id);
		} else {
			$this->session->set_flashdata('noticeGagalUbah', 'Gagal!');
			$direktori = $direktoriUbahData . '/' . $id;
		}
		redirect(base_url('Admin/' . $direktori));
	}

	public function hapusData($tabel, $id, $direktori)
	{
		$this->M_FMADM->hapusData($tabel, $id);
		$this->session->set_flashdata('noticeHapus', 'Berhasil!');
		redirect(base_url('Admin/' . $direktori));
	}

	public function cetak($id_lokasi = null)
	{
		if ($this->session->userdata('detailAdmin')) {
			$data['title'] = 'Cetak';
			$data['semua'] = $this->M_FMADM->semuaData();
			$data['dataLokasi'] = $this->M_FMADM->detailTabel('tabel_lokasi');
			$data['dataPerankinganSementara'] = $this->M_FMADM->detailTabel('tabel_perankingan_sementara');
			$data['dataPerankinganSementaraById'] = [];
			$data['id_lokasi'] = $id_lokasi;
			$data['lokasiById'] = [];

			$data['lokasi_null'] = [];
			$i = 0;
			foreach ($data['dataPerankinganSementara'] as $key => $value) {
				if ($value->id_lokasi == null) {
					$data['lokasi_null'][$i] = $value;
				}

				$i++;
			}

			$i = 0;
			if ($id_lokasi != null) {
				foreach ($data['dataPerankinganSementara'] as $key => $value) {
					if ($value->id_lokasi == $id_lokasi) {
						$data['dataPerankinganSementaraById'][$i] =	$value;
						$i++;
					}
				}
				foreach ($data['dataLokasi'] as $key => $value) {
					if ($value->id == $id_lokasi) {
						$data['lokasiById'][0] = $value;
					}
				}
			}

			// print_r($data['lokasiById']);
			// die;

			$this->load->view('templates/header', $data);
			$this->load->view('admin/indexCetak', $data);
			$this->load->view('templates/footer', $data);
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}
}