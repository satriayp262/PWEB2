<?php

class manusia{
    public $nama_saya;
    private $nim_saya;

    public function panggil_nama($saya){
        $this->nama_saya = $saya;
    }
    
}

//class turunan dari manusia
class mahasiswa extends Manusia
{
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }
}

//instansiasi class mahasiswa
$informatika= new mahasiswa();

$informatika->panggil_nama("Satria Yudha");
$informatika->panggil_mahasiswa("Pangrangau");

//menampilkan isi property
echo "Nama depan saya : " . $informatika->nama_saya . "<br/>";
echo "Nama belakang saya : " . $informatika->nama_mahasiswa;