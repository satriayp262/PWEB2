<?php
//menampilkan class database
include '../classes/databases.php'
//instansiasi class database
$db = new database;
?>

<h3>Data Mahasiswa</h3>
<a href="input_mhs.php">Tambah Mahasiswa</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
    </tr>
    <?php 
    $no=1;
    foreach($db->tampil_mahasiswa() as $x) {
    ?>
</table>