<?php
//menampilkan class database
include '../classes/databases.php';
include '../../public/script.php';
//instansiasi class database
$db = new database;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD</title>
</head>
<body>

<div class="px-3 py-3">
<nav class="navbar navbar-expand-lg bg-body-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIAKAD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="beranda.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tampil_mhs.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_dsn.php">Dosen</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="px-5">
<h3>Data Dosen</h3>
<a href="input_dsn.php" class="btn btn-primary mb-3">Tambah Dosen</a>

<?php 
if(isset($_GET['success']) && $_GET['success'] == "tambah"){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Data Mahasiswa Berhasil Ditambahkan!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
elseif(isset($_GET['success']) && $_GET['success'] == "update"){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Data Mahasiswa Berhasil Diedit!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
elseif(isset($_GET['success']) && $_GET['success'] == "hapus"){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Data Mahasiswa Berhasil Dihapus!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<table class="table table-striped" style="width: 70%;">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIDN</th>
        <th>Alamat</th>
        <th>Opsi</th>
    </tr>
    <?php 
    $no = 1;
    foreach($db->tampil_dosen() as $x){
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['nidn'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td>
            <a href="edit_dsn.php?id=<?php echo $x['id']; ?>&aksi=edit" class="btn btn-warning">edit</a>
            <a href="proses_dsn.php?id=<?php echo $x['id']; ?>&aksi=hapus" class="btn btn-danger">hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
</div>
</div>