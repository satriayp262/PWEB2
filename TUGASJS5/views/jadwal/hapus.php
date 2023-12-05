<?php

include_once '../../config.php';
include_once '../../controllers/JadwalController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id_jadwal'])) {
    $id_jadwal = $_GET['id_jadwal'];

    $jadwalController=new JadwalController($db);
    $result=$jadwalController->deleteJadwal($id_jadwal);

    if ($result) {
        header('Location:jadwal');
    } else {
        echo "Gagal Menghapus Data";
    }
}