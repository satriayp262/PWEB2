<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/JadwalController.php';
include_once '../../controllers/BusController.php';
require '../../index.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$jadwalController = new jadwalController($db);
$jadwal = $jadwalController->getAllJadwal();
$busController = new busController($db);
$bus = mysqli_fetch_assoc($jadwal);
$id_bus = $bus['id_bus'];
$bis = $busController->getBusById($id_bus);
$namabis = mysqli_fetch_assoc($bis);

?>


<div class="px-5 py-3">
    <h3>Data Jadwal</h3>
    <a href="tambah" class="btn btn-primary mb-3">Tambah Jadwal</a>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama Bus</th>
            <th>Tujuan</th>
            <th>Kelas</th>
            <th>Jam Kedatangan</th>
            <th>Jam Keberangkatan</th>
            <th>Opsi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($jadwal as $jadwalData) {
            // Ambil nama bus berdasarkan id_bus pada setiap jadwal
            $busData = $busController->getBusById($jadwalData['id_bus']);
            $namaBus = mysqli_fetch_assoc($busData);
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $namaBus['nama_bus']; ?></td>
                <td><?php echo $jadwalData['tujuan'] ?></td>
                <td><?php echo $jadwalData['kelas'] ?></td>
                <td><?php echo $jadwalData['jam_datang'] ?></td>
                <td><?php echo $jadwalData['jam_berangkat'] ?></td>
                <td>
                    <a href="edit_jdwl_admin.php?id_jadwal=<?php echo $jadwalData['id_jadwal']; ?>&aksi=edit" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <!-- ... -->
                        </svg></a>
                    <a href="proses_jdwl_admin.php?id_jadwal=<?php echo $jadwalData['id_jadwal']; ?>&aksi=hapus" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <!-- ... -->
                        </svg></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>

</div>