<?php

include_once '../../config.php';
include_once '../../controllers/PenumpangController.php';

$database= new database();
$db=$database->getKoneksi();

if (isset($_POST['submit'])){
    $nama_bus = $_POST['nama_bus'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $jumlah = $_POST['jumlah'];

    $penumpangController= new PenumpangController($db);
    $result=$penumpangController->createPenumpang($nama_bus,$bulan,$tahun,$jumlah);

    if($result){
        header("Location:penumpang");
    }else{
        header("Location:tambah");
    }
}
