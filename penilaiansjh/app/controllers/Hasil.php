<?php

class Hasil extends Controller {
    public function index() {
        $data['judul'] = 'Hasil';
        
        $this->view('templates/header', $data);
        $this->view('hasil/index');
        $this->view('templates/footer');
    }
}