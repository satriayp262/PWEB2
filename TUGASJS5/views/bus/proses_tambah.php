<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database= new database();
$db=$database->getKoneksi();

if (isset($_POST['submit'])){
    $nama_bus = $_POST['nama_bus'];
    $nomor_telpon = $_POST['nomor_telpon'];

    $busController= new BusController($db);
    $result=$busController->createBus($nama_bus,$nomor_telpon);

    if($result){
        header("Location:bus");
    }else{
        header("Location:tambah_bus");
    }
}
