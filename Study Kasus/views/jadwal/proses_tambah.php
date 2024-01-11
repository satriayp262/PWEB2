<?php

include_once '../../config.php';
include_once '../../controllers/JadwalController.php';

$database= new database();
$db=$database->getKoneksi();

if (isset($_POST['submit'])){
    $nama_bus = $_POST['nama_bus'];
    $tujuan = $_POST['tujuan'];
    $kelas = $_POST['kelas'];
    $jam_datang = $_POST['jam_datang'];
    $jam_berangkat = $_POST['jam_berangkat'];

    $jadwalController= new JadwalController($db);
    $result=$jadwalController->createJadwal($nama_bus,$tujuan,$kelas,$jam_datang,$jam_berangkat);

    if($result){
        header("Location:jadwal");
    }else{
        header("Location:tambah");
    }
}
