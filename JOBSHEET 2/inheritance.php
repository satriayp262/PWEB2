<?php

class Manusia {
    public $nama_saya;
    private $nim_saya;

    public function panggil_nama($saya){
        $this->nama_saya = $saya;
    }
    public function setNim($nim) {
        $this->nim_saya = $nim;
    }
    public function getNim() {
        return $this->nim_saya;
    }
}

//class turunan dari class manusia
class Mahasiswa extends Manusia {
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa) {
        $this->nama_mahasiswa = $mahasiswa;
    }
    function setNim($nim) { 
        parent::setNim($nim); 
    }
    function getNim() { 
        return parent::getNim();
    }
}

//instansiasi class mahasiswa
$informatika = new Mahasiswa();

$informatika->panggil_nama("Satria Yudha");
$informatika->panggil_mahasiswa("Pangrangau");
$informatika->setNim("220302093");

//menampilkan isi property
echo "Nama depan saya: " . $informatika->nama_saya . "<br/>";
echo "Nama belakang saya: " . $informatika->nama_mahasiswa . "<br/>";
echo "NIM saya: " . $informatika->getNim();
