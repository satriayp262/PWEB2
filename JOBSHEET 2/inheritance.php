<?php

class Manusia {
    public $nama_saya;
    private $nim_saya;
    protected $alamat_saya;

    public function panggil_nama($saya){
        $this->nama_saya = $saya;
    }
    public function setNim($nim) {
        $this->nim_saya = $nim;
    }
    public function getNim() {
        return $this->nim_saya;
    }
    public function setAlamat($alamat) {
        $this->alamat_saya = $alamat;
    }
    public function getAlamat() {
        return $this->alamat_saya;
    }
}

//class turunan dari class manusia
class Mahasiswa extends Manusia {
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa) {
        $this->nama_mahasiswa = $mahasiswa;
    }
}

//instansiasi class mahasiswa
$informatika = new Mahasiswa();

$informatika->panggil_nama("Satria Yudha Pangrangau");
$informatika->setNim("220302093");
$informatika->setAlamat("Jalan Slamet");

//menampilkan isi property
echo "Nama saya : " . $informatika->nama_saya . "<br/>";
echo "NIM saya : " . $informatika->getNim() . "<br/>";
echo "Alamat saya : " . $informatika->getAlamat();
