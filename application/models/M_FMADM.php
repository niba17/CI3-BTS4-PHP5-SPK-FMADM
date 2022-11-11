<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_FMADM extends CI_Model
{

	//logika ambil semua data 
	public function semuaData()
	{
		return [
			"dataAdmin" => $this->db->get('tabel_admin')->result(),
			"dataAlternatif" => $this->db->get('tabel_alternatif')->result(),
			// "dataKriteria" => $this->db->get('tabel_kriteria')->result(),
			"dataLokasi" => $this->db->get('tabel_lokasi')->result(),
			"dataPerankinganSementara" => $this->db->get('tabel_perankingan_sementara')->result()
		];
	}

	public function antiDuplikasi($tabel, $index, $key)
	{
		return $this->db->get_where($tabel, [$index => $key])->row();
	}

	public function antiDuplikasiUbahData($tabel, $index, $key, $id)
	{
		$duplikat = false;

		$query = $this->db->get_where($tabel, [$index => $key])->row();
		$pembanding = $this->db->get_where($tabel, ['id' => $id])->row();

		if ($query) {
			if ($query->id == $pembanding->id) {
				$duplikat = false;
			} else {
				$duplikat = true;
			}
		}

		return $duplikat;
	}

	public function detailData($tabel, $index, $key)
	{
		$this->db->where($index, $key);
		return $detailAdmin = $this->db->get($tabel)->row();
	}

	public function tambahData($data, $tabel)
	{
		return $this->db->insert($tabel, $data);
	}

	public function ubahData($data, $tabel, $id)
	{
		if ($tabel == 'tabel_admin') {
			$data['password'] = md5($data['password']);
		}
		$this->db->where('id', $id);
		return $this->db->update($tabel, $data);
	}

	public function hapusData($tabel, $id)
	{
		$this->db->where('id', $id);
		return $this->db->delete($tabel);
	}

	public function FMADM()
	{
		$semuaData = $this->M_FMADM->semuaData();
		$semuaDataAlternatif = $semuaData['dataAlternatif'];

		//deklarasi bobot setiap kriteria
		$bTemperatur = 0.20;
		$bCurahHujan = 0.20;
		$bKelembaban = 0.20;
		$bDrainase = 0.13;
		$bTeksturTanah = 0.13;
		$bKedalamanTanah = 0.07;
		$bPHH2O = 0.07;

		$sC1F = [];
		$sC2F = [];
		$sC3F = [];
		$sC4F = [];
		$sC5F = [];
		$sC6F = [];
		$sC7F = [];

		//logika fuzzyfikasi
		$i = 0;
		foreach ($semuaDataAlternatif as $key => $value) {

			//logika derajat keanggotaan
			//fuzzyfikasi temperatur
			if ($value->C1 > 35 || $value->C1 < 18) {
				$value->C1F = 0;
			} else if ($value->C1 >= 18 && $value->C1 <= 24) {
				$value->C1F = (($value->C1 - 18) / (24 - 18));
			} else if ($value->C1 >= 29 && $value->C1 <= 35) {
				$value->C1F = ((35 - $value->C1) / (35 - 29));
			} else if ($value->C1 > 24 && $value->C1 < 29) {
				$value->C1F = 1;
			}

			//fuzzyfikasi curah hujan
			if ($value->C2 > 750 || $value->C2 < 100) {
				$value->C2F = 0;
			} else if ($value->C2 >= 100 && $value->C2 <= 175) {
				$value->C2F = (($value->C2 - 100) / (175 - 100));
			} else if ($value->C2 >= 500 && $value->C2 <= 750) {
				$value->C2F = ((750 - $value->C2) / (750 - 500));
			} else if ($value->C2 > 175 && $value->C2 < 500) {
				$value->C2F = 1;
			}

			//fuzzyfikasi kelembaban
			if ($value->C3 > 95 || $value->C3 < 60) {
				$value->C3F = 0;
			} else if ($value->C3 >= 60 && $value->C3 <= 70) {
				$value->C3F = (($value->C3 - 60) / (70 - 60));
			} else if ($value->C3 >= 85 && $value->C3 <= 95) {
				$value->C3F = ((95 - $value->C3) / (95 - 85));
			} else if ($value->C3 > 70 && $value->C3 < 85) {
				$value->C3F = 1;
			}

			//fuzzyfikasi drainase
			if ($value->C4 == 'Sangat Terhambat') {
				$value->C4F = 0;
			} else if ($value->C4 == 'Terhambat') {
				$value->C4F = 0.25;
			} else if ($value->C4 == 'Agak Cepat') {
				$value->C4F = 0.75;
			} else if ($value->C4 == 'Baik') {
				$value->C4F = 1;
			}

			//fuzzyfikasi tekstur tanah
			if ($value->C5 == 'Kasar') {
				$value->C5F = 0.75;
			} else if ($value->C5 == 'Sangat Halus') {
				$value->C5F = 0;
			} else if ($value->C5 == 'Halus') {
				$value->C5F = 0.25;
			} else if ($value->C5 == 'Agak Kasar-Kasar') {
				$value->C5F = 1;
			}

			//fuzzyfikasi kedalaman tanah
			if ($value->C6 < 11) {
				$value->C6F = 0;
			} else if ($value->C6 >= 11 && $value->C6 <= 15) {
				$value->C6F = (($value->C6 - 11) / (15 - 11));
			} else if ($value->C6 > 15) {
				$value->C6F = 1;
			}

			//fuzzyfikasi PH H2O
			if ($value->C7 > 9.0 || $value->C7 < 4.7) {
				$value->C7F = 0;
			} else if ($value->C7 >= 4.7 && $value->C7 <= 5.5) {
				$value->C7F = (($value->C7 - 4.7) / (5.5 - 4.7));
			} else if ($value->C7 >= 8.2 && $value->C7 <= 9.0) {
				$value->C7F = ((9.0 - $value->C7) / (9.0 - 8.2));
			} else if ($value->C7 > 5.5 && $value->C7 < 8.2) {
				$value->C7F = 1;
			}

			//logika mencari nilai tertinggi kolom kriteria
			$sC1F[$i] = $value->C1F;
			rsort($sC1F);
			$sC2F[$i] = $value->C2F;
			rsort($sC2F);
			$sC3F[$i] = $value->C3F;
			rsort($sC3F);
			$sC4F[$i] = $value->C4F;
			rsort($sC4F);
			$sC5F[$i] = $value->C5F;
			rsort($sC5F);
			$sC6F[$i] = $value->C6F;
			rsort($sC6F);
			$sC7F[$i] = $value->C7F;
			rsort($sC7F);

			$i++;
		}

		foreach ($semuaDataAlternatif as $key => $value) {

			// logika normalisasi
			if ($sC1F[0] == 0) {
				$value->C1N = 0;
			}
			if ($sC2F[0] == 0) {
				$value->C2N = 0;
			}
			if ($sC3F[0] == 0) {
				$value->C3N = 0;
			}
			if ($sC4F[0] == 0) {
				$value->C4N = 0;
			}
			if ($sC5F[0] == 0) {
				$value->C5N = 0;
			}
			if ($sC6F[0] == 0) {
				$value->C6N = 0;
			}
			if ($sC7F[0] == 0) {
				$value->C7N = 0;
			}
			if ($sC1F[0] != 0) {
				$value->C1N = $value->C1F / $sC1F[0];
			}
			if ($sC2F[0] != 0) {
				$value->C2N = $value->C2F / $sC2F[0];
			}
			if ($sC3F[0] != 0) {
				$value->C3N = $value->C3F / $sC3F[0];
			}
			if ($sC4F[0] != 0) {
				$value->C4N = $value->C4F / $sC4F[0];
			}
			if ($sC5F[0] != 0) {
				$value->C5N = $value->C5F / $sC5F[0];
			}
			if ($sC6F[0] != 0) {
				$value->C6N = $value->C6F / $sC6F[0];
			}
			if ($sC7F[0] != 0) {
				$value->C7N = $value->C7F / $sC7F[0];
			}

			//logika perankingan
			$value->ranking = ($value->C1N * $bTemperatur) + ($value->C2N * $bCurahHujan) + ($value->C3N * $bKelembaban) + ($value->C4N * $bDrainase) + ($value->C5N * $bTeksturTanah) + ($value->C6N * $bKedalamanTanah) + ($value->C7N * $bPHH2O);
		}

		return $semuaDataAlternatif;
	}

	//logika pengurutan descending ranking
	public function ranking($FMADM)
	{
		$this->db->empty_table('tabel_perankingan_sementara');

		foreach ($FMADM as $key => $value) {
			$temp = $value->id;
			$value->id = $value->ranking;
			$value->ranking = $temp;
		}

		rsort($FMADM);

		foreach ($FMADM as $key => $value) {
			$temp = $value->id;
			$value->id = $value->ranking;
			$value->ranking = $temp;

			//logika insert data ke tabel 'tabel_perankingan_sementara'
			$dataSmntr = ['nama' => $value->nama, 'id_lokasi' => $value->id_lokasi, 'C1N' => $value->C1N, 'C2N' => $value->C2N, 'C3N' => $value->C3N, 'C4N' => $value->C4N, 'C5N' => $value->C5N, 'C6N' => $value->C6N, 'C7N' => $value->C7N, 'ranking' => $value->ranking];
			$this->tambahData($dataSmntr, 'tabel_perankingan_sementara');
		}

		return $FMADM;
	}

	//logika verifikasi
	public function verifikasi($tabel, $password)
	{
		return $this->db->get_where($tabel, $password);
	}
}