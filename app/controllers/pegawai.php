<?php

class pegawai extends Controller {
    public function index() {
        $data['judul'] = "Beranda Pegawai";
        $this->view('templates/header', $data);
        $this->view('pegawai/index');
        $this->view('templates/footer');
    }

    public function formDaftar() {
        $data['judul'] = "Pendaftaran";
        $this->view('templates/header', $data);
        $this->view('pegawai/formDaftar');
        $this->view('templates/footer');
    }
}