<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController->getAllMahasiswa();
?>


        <div class="px-5 py-3">
            <h3>Data Mahasiswa</h3>
            <a href="tambah.php" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
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
                            <a class="btn btn-warning" href="edit.php?id=<?php echo $x['id']; ?>">Edit</a>
                            <a class="btn btn-danger" href="hapus.php?id=<?php echo $x['id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus..?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

