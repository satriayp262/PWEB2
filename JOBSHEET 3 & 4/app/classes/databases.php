<?php

class database{
    var $host="localhost";
    var $username="root";
    var $password="";
    var $db="akademik";
    var $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host,$this->username,$this->password,$this->db);
    }

    //MAHASISWA
    function tampil_mahasiswa(){
        $hasil=array();
        $data=mysqli_query($this->koneksi,"select * from mahasiswa");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
         }
         return $hasil;
    }

    function tambah_mhs($nim,$nama,$alamat){
        mysqli_query($this->koneksi,"insert into mahasiswa (nim,nama,alamat) values('$nim','$nama','$alamat')");
    }

    function edit($id){
        $hasil=array();
        $data = mysqli_query($this->koneksi,"select * from mahasiswa where id='$id'");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id, $nim, $nama, $alamat){
        mysqli_query($this->koneksi,"update mahasiswa set nim='$nim',nama='$nama' ,alamat='$alamat' where id='$id'");
    }  

    function hapus($id){
        mysqli_query($this->koneksi,"delete from mahasiswa where id='$id'");
    }    

    //DOSEN
    function tampil_dosen(){
        $hasil=array();
        $data=mysqli_query($this->koneksi,"select * from dosen");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
         }
         return $hasil;
    }

    function tambah_dsn($nama,$nidn,$alamat){
        mysqli_query($this->koneksi,"insert into dosen (nama,nidn,alamat) values('$nama','$nidn','$alamat')");
    }

    function edit_dsn($id){
        $hasil=array();
        $data = mysqli_query($this->koneksi,"select * from dosen where id='$id'");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update_dsn($id, $nama, $nidn, $alamat){
        mysqli_query($this->koneksi,"update dosen set nama='$nama', nipd='$nidn', alamat='$alamat' where id='$id'");
    }  

    function hapus_dsn($id){
        mysqli_query($this->koneksi,"delete from dosen where id='$id'");
    }    
}