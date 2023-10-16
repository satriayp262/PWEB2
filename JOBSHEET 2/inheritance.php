<?php

class Manusia { 
    public $nama_saya;
    private $nim_saya;

    public function panggil_nama($saya){
        $this->nama_saya = $saya;
    }
    function panggil_nim($nim){
        $this->nim_saya = $nim;
    }
}

// Class turunan dari Manusia
class Mahasiswa extends Manusia { 
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa) {
        $this->nama_mahasiswa = $mahasiswa;
    }
    function panggil_nim($nim) { 
        $this->nim_saya = $nim; 
    }
}

// Instansiasi class Mahasiswa
$informatika = new Mahasiswa(); 

$informatika->panggil_nama("Satria Yudha"); 
$informatika->panggil_mahasiswa("Pangrangau");
$informatika->panggil_nim("220302093");

// Menampilkan isi property
echo "Nama depan saya : " . $informatika->nama_saya . "<br/>"; 
echo "Nama belakang saya : " . $informatika->nama_mahasiswa . "<br/>";
echo "NIM saya : " . $informatika->nim_saya;
