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

<div>
<nav class="navbar navbar-expand-lg" style="background-color:darkorange;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color:aliceblue">SIAKAD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color:aliceblue">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tampil_mhs.php" style="color:aliceblue">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_dsn.php" style="color:aliceblue">Dosen</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h3 class="text-center mt-5">Edit Data Dosen</h3>
<div class="card px-3 py-3" style="margin: 25px auto; padding: 20px; max-width:400px">
<form action="proses_dsn.php?aksi=update" method="post">
    <?php
    foreach ($db -> edit_dsn($_GET['id']) as $d){
    ?>
    <table>
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="hidden" name="id" value="<?php echo $d['id'] ?>" class="form-control">
        <input type="text" name="nama" value="<?php echo $d['nama'] ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">NIDN</label>
        <input type="text" name="nidn" value="<?php echo $d['nidn'] ?>" class="form-control">
     </div>
     <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea name="alamat" cols="30" rows="5" class="form-control"><?php echo $d['alamat'] ?></textarea>
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