<?php
include '../classes/databases.php';
include '../../public/script.php';
$db = new database();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD</title>
</head>

<h3 class="text-center mt-5">Edit Data Mahasiswa</h3>
<div class="card px-3 py-3" style="margin: 25px auto; padding: 20px; max-width:400px">
<form action="proses_mhs.php?aksi=update" method="post">
    <?php
    foreach ($db -> edit($_GET['id']) as $d){
    ?>
    <table>
    <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" name="nim" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea name="alamat" cols="30" rows="5" class="form-control"></textarea>    
    </div>
    <div class="d-flex justify-content-between">
    <a href="tampil_mhs.php" class="btn btn-secondary w-100 mx-2">Kembali</a>
    <button type="submit" class="btn btn-primary w-100 mx-2">Submit</button>
    </div>
    </table>
    <?php
    }
    ?>
</form>
</div>