<?php
include '../classes/databases.php';
include '../../script.php';
$db = new database();

$aksi= $_GET['aksi'];
if($aksi=="tambah"){
    $db->tambah_mhs($_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_mhs.php?success=tambah");
}elseif($aksi=="update"){
    $db->update($_POST['id'],$_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_mhs.php?success=update");
}elseif($aksi=="hapus"){
    $db->hapus($_GET['id']);
    header("location:tampil_mhs.php?success=hapus");
}
   