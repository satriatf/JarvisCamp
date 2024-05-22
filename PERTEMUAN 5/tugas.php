<?php
class Kendaraan {
    public $merk;
    public $tahun;

    public function __construct($merk, $tahun) {
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    public function info() {
        return "Kendaraan ini bermerk $this->merk dan dibuat pada tahun $this->tahun.";
    }
}

class Mobil extends Kendaraan {
    public $jenis;

    public function __construct($merk, $tahun, $jenis) {
        parent::__construct($merk, $tahun);
        $this->jenis = $jenis;
    }

    public function infoLengkap() {
        return "Mobil ini bermerk $this->merk, dibuat pada tahun $this->tahun, dan merupakan jenis $this->jenis.";
    }
}

// Membuat object berdasarkan class Mobil
$mobilBaru = new Mobil("Mitsubishi", 2022, "SUV");

// Menampilkan informasi kendaraan dan mobil
echo $mobilBaru->info();         
echo "<br>";
echo $mobilBaru->infoLengkap();  
?>
