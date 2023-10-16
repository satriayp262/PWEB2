<?php

//membuat class mahasiswa
class mahasiswa
{
    //property public
    public $nama;
    private $nim= "220302093";

    //method public
    function tampilkan_nama()
    {
        return "Nama saya Satria Yudha";
    }

    //method private 
    function tampilkan_nim()
    {
        return "<br/> NIM Saya ". $this->nim;
    }
}
//instansiasi objek mahasiswa kedalam variabel $mahasiswa
$mahasiswa= new mahasiswa();
$nim = new Mahasiswa();

//memanggil method tampilkan_nama
echo $mahasiswa->tampilkan_nama();
echo $mahasiswa->tampilkan_nim();