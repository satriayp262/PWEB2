<?php
include '../classes/databases.php';
$db = new database();

$aksi= $_GET['aksi'];
if($aksi=="tambah"){
    $db->tambah_dsn($_POST['nama'], $_POST['nip'], $_POST['alamat']);
    header("location:tampil_dsn.php");
}elseif($aksi=="update"){
    $db->update_dsn($_POST['id'],$_POST['nama'], $_POST['nip'], $_POST['alamat']);
    header("location:tampil_dsn.php");
}elseif($aksi=="hapus"){
    $db->hapus_dsn($_GET['id']);
    header("location:tampil_dsn.php");
}
   