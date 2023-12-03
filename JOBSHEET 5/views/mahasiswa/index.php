<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController->getAllMahasiswa();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div>
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
        <div class="px-5 py-3">
            <h3>Data Mahasiswa</h3>
            <a href="tambah.php" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
            <?php
            if (isset($_GET['success']) && $_GET['success'] == "tambah") {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mahasiswa Berhasil Ditambahkan!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            } elseif (isset($_GET['success']) && $_GET['success'] == "update") {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mahasiswa Berhasil Diedit!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            } elseif (isset($_GET['success']) && $_GET['success'] == "hapus") {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Data Mahasiswa Berhasil Dihapus!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
            }
            ?>

            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($mahasiswa as $x) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $x['nim'] ?></td>
                        <td><?php echo $x['nama'] ?></td>
                        <td><?php echo $x['tempat_lahir'] ?></td>
                        <td><?php echo $x['tanggal_lahir'] ?></td>
                        <td><?php echo $x['jenis_kelamin'] ?></td>
                        <td><?php echo $x['agama'] ?></td>
                        <td><?php echo $x['alamat'] ?></td>
                        <td>
                            <a href="edit_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit" class="btn btn-warning">edit</a>
                            <a href="proses_mhs.php?id=<?php echo $x['id']; ?>&aksi=hapus" class="btn btn-danger">hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>