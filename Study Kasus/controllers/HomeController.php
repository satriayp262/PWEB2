<?php

class HomeController{
    public function home(){
        header("Location:http://localhost/TUGASJS5/index.php");
    }
    public function jadwal(){
        header("Location:http://localhost/TUGASJS5/views/jadwal/index.php");
    }
    public function tambah(){
        header("Location:http://localhost/TUGASJS5/views/jadwal/tambah.php");
    }
    public function proses_tambah(){
        header("Location:http://localhost/TUGASJS5/views/jadwal/proses_tambah.php");
    }
    public function edit(){
        header("Location:http://localhost/TUGASJS5/views/jadwal/edit.php");
    }
    public function hapus(){
        header("Location:http://localhost/TUGASJS5/views/jadwal/hapus.php");
    }
    public function bus(){
        header("Location:http://localhost/TUGASJS5/views/bus/index.php");
    }
    public function tambah_bus(){
        header("Location:http://localhost/TUGASJS5/views/bus/tambah.php");
    }
    public function proses_tambah_bus(){
        header("Location:http://localhost/TUGASJS5/views/bus/proses_tambah.php");
    }
    public function edit_bus(){
        header("Location:http://localhost/TUGASJS5/views/bus/edit.php");
    }
    public function hapus_bus(){
        header("Location:http://localhost/TUGASJS5/views/bus/hapus.php");
    }
}