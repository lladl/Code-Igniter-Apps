<?php

class home extends CI_Controller
{
  public function index($nama = 'Gengs')
  {
    $data['judul'] = 'Halaman Home';
    $data['nama'] = $nama;
    $this->load->view('templates/header', $data);
    $this->load->view('templates/footer');
    $this->load->view('home/index', $data);
  }
}
