<?php

class database{
    var $host="localhost";
    var $username="root";
    var $password="";
    var $db="akademik";

    function __construct()
    {
        $koneksi mysqli_connect($this->host,$this->username,$this->password,$this->db);
    }

    function tampil_mahasiswa(){
        $data=mysqli_query($this->koneksi,"select * from mahasiswa");
        while($row=mysqli_fetch_array($data)){
            $hasil=$d;
         }
         return $hasil;
    }
}