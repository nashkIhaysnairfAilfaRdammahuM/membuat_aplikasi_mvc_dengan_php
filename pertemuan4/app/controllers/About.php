<?php
class About {
    public function index($nama = 'Sandhika', $pekerjaan = 'Dosen') {
        echo "Halo, nama saya $nama, saya seorang $pekerjaan";
    }

    public function page() {
        echo __CLASS__ . '/' . __FUNCTION__;
    }
}