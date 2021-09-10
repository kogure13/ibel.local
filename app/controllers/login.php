<?php

class login extends Controller
{
    public function index()
    {
        $data['judul'] = "Halaman Login";
        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }
}