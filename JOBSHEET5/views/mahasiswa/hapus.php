<?php

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $mahasiswaController=new MahasiswaController($db);
    $result=$mahasiswaController->deleteMahasiswa($id);

    if ($result) {
        header('Location:mahasiswa');
    } else {
        echo "Gagal Menghapus Data";
    }
}