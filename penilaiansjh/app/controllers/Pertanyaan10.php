<?php

class Pertanyaan10 extends Controller {
    public function index(
        // $nama = 'Marco', $pekerjaan = 'Mahasiswa',
    ) {
        // $data['nama'] = $nama;
        // $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'Pertanyaan';
        
        $this->view('templates/header', $data);
        $this->view('pertanyaan10/index');
        $this->view('templates/footer');
    }
}