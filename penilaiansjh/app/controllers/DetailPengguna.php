<?php

class DetailPengguna extends Controller {
    public function index () {
        $data['judul'] = 'Detail Pengguna';

        $this->view('templates/header', $data);
        $this->view('detailpengguna/index');
        $this->view('templates/footer');
    }
}