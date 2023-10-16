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
    //isi method
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
        //isi method
    }

    //method untuk menampilkan nama
    function tampil_namadosen(){
        return "Nama saya adalah Satria";
    }

    //method untuk menampilkan prodi
    function tampil_prodi(){
        //isi method
    }
}    

//membuat objek nama_mahasiswa
$nama_mahasiswa=new mahasiswa();

//menampilkan objek ke layar
//echo $nama_mahasiswa->tampil_nama();

//membuat objek nama_dosen
$nama_dosen=new dosen();

//menampilkan objek ke layar
echo $nama_dosen->tampil_namadosen();