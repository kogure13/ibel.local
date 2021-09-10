<?php

class sdm extends Controller
{
  public function index()
  {
    $data['judul'] = "Beranda SDM";
    $this->view('templates/header', $data);
    $this->view('sdm/index');
    $this->view('templates/footer');
  }
}