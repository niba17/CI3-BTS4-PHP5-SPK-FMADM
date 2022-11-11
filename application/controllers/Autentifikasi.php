<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autentifikasi extends CI_Controller
{

  public function indexLogin()
  {
    $data["title"] = "Login";
    $this->load->view('templates/header', $data);
    $this->load->view('Autentifikasi/indexLogin', $data);
    $this->load->view('templates/footer');
  }

  //load logika verifikasi
  public function verifikasi()
  {
    $data = [
      'username' => $this->input->post('username'),
      'password' => md5($this->input->post('password')),
    ];

    $query = $this->M_FMADM->verifikasi("tabel_admin", $data)->num_rows();

    if ($query > 0) {
      $dataSession = [
        'detailAdmin' => $this->M_FMADM->detailData("tabel_admin", 'username', $data['username'])
      ];
      $this->session->set_userdata($dataSession);
      $this->session->set_flashdata('noticeBerhasilLogin', 'Data tidak sesuai!');
      redirect(base_url('Admin/indexBeranda'));
    } else {
      $this->session->set_flashdata('noticeGagalLogin', 'Data tidak sesuai!');
      redirect(base_url('Autentifikasi/indexLogin'));
    }
  }

  //load logika logout
  public function logout()
  {
    $this->session->set_flashdata('noticeBerhasilLogout', 'Data tidak sesuai!');
    $this->session->unset_userdata('detailAdmin');
    redirect(base_url('Autentifikasi/indexLogin'));
  }
}
