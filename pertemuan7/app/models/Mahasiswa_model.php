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

    private $dbh; // database handler
    private $stmt; // statement

    public function __construct() {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}