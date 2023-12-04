<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$dosenController = new DosenController($db);
$dosen = $dosenController->getAllDosen();
?>


        <div class="px-5 py-3">
            <h3>Data Dosen</h3>
            <a href="tambah_dsn" class="btn btn-primary mb-3">Tambah Dosen</a>
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($dosen as $x) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $x['nidn'] ?></td>
                        <td><?php echo $x['nama'] ?></td>
                        <td><?php echo $x['jenis_kelamin'] ?></td>
                        <td><?php echo $x['agama'] ?></td>
                        <td><?php echo $x['alamat'] ?></td>
                        <td>
                            <a class="btn btn-warning" href="edit_dsn?id=<?php echo $x['id']; ?>">Edit</a>
                            <a class="btn btn-danger" href="hapus_dsn?id=<?php echo $x['id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus..?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

