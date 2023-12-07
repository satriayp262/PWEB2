<?php

class Databases {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "rumah_sakit";
    var $koneksi;

    function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db, $this->koneksi);
    }

    function tampil_pasien(){
        $data = mysqli_query($this->koneksi, "SELECT * FROM farmasi");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
    }
    return $hasil;
    }

    function tambah_pasien($nama,$jenis_kelamin, $alamat){
        
    }
}