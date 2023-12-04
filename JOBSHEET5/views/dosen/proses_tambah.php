<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database= new database();
$db=$database->getKoneksi();

if (isset($_POST['submit'])){
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $dosenController= new DosenController($db);
    $result=$dosenController->createDosen($nidn, $nama, $jenis_kelamin, $agama, $alamat);

    if($result){
        header("Location:dosen");
    }else{
        header("Location:tambah_dsn");
    }
}
