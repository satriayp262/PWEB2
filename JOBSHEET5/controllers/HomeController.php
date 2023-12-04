<?php

class HomeController{
    public function home(){
        header("Location:http://localhost/JOBSHEET5/index.php");
    }
    public function mahasiswa(){
        header("Location:http://localhost/JOBSHEET5/views/mahasiswa/index.php");
    }
    public function tambah(){
        header("Location:http://localhost/JOBSHEET5/views/mahasiswa/tambah.php");
    }
    public function proses_tambah(){
        header("Location:http://localhost/JOBSHEET5/views/mahasiswa/proses_tambah.php");
    }
    public function edit(){
        header("Location:http://localhost/JOBSHEET5/views/mahasiswa/edit.php");
    }
    public function hapus(){
        header("Location:http://localhost/JOBSHEET5/views/mahasiswa/hapus.php");
    }
}