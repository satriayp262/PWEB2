<?php

//membuat class mahasiswa
class mahasiswa{
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;

    //method untuk menampilkan nama
    function tampil_nama(){
     return "Nama saya adalah Satria";
    }

    //method untuk menampilkan alamat
    function tampil_alamat(){
        return "Alamat saya adalah jl slamet sidanegara cilacap tengah";
    }
}

//membuat class dosen
class dosen{
    //menuliskan property
    var $nidn;
    var $nama;
    var $prodi;

    //method untuk menampilkan nidn
    function tampil_nidn(){
        return "NIDN saya adalah 220302093";
    }

    //method untuk menampilkan nama
    function tampil_namadosen(){
        return "Nama saya adalah Satria";
    }

    //method untuk menampilkan prodi
    function tampil_prodi(){
        return "Prodi saya adalah Tenik Informatika";
    }
}    

//membuat objek nama_mahasiswa
$nama_mahasiswa=new mahasiswa();
$alamat_mahasiswa=new mahasiswa();

//menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();
echo "</br>";
echo $alamat_mahasiswa->tampil_alamat();
echo "</br>";
echo "</br>";

//membuat objek nama_dosen
$nama_dosen=new dosen();
$nidn_dosen=new dosen();
$prodi_dosen=new dosen();

//menampilkan objek ke layar
echo $nama_dosen->tampil_namadosen();
echo "</br>";
echo $nidn_dosen->tampil_nidn();
echo "</br>";
echo $prodi_dosen->tampil_prodi();