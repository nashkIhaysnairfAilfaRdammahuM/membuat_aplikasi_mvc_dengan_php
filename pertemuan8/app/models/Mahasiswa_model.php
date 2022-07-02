<?php
class Mahasiswa_model {
    // private $mhs = [
    //     [
    //         "nama" => "Sandhika Galih",
    //         "nrp" => "043040023",
    //         "email" => "sandhikagalih@unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Doddy Ferdiansyah",
    //         "nrp" => "133050321",
    //         "email" => "doddy@gmail.com",
    //         "jurusan" => "Teknik Mesin"
    //     ],
    //     [
    //         "nama" => "Erik Doank",
    //         "nrp" => "163030123",
    //         "email" => "erik@yahoo.com",
    //         "jurusan" => "Teknik Industri"
    //     ],
    // ];

    private $table = 'mahasiswa';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllMahasiswa() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}