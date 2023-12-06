<?php

include_once '../../config.php';
include_once '../../controllers/PenumpangController.php';
require '../../header.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id_pa'])) {
    $id_pa = $_GET['id_pa'];

    $penumpangController=new JadwalController($db);
    $result=$penumpangController->deletePenumpang($id_pa);

    if ($result) {
        header('Location:penumpang');
    } else {
        echo "Gagal Menghapus Data";
    }
}