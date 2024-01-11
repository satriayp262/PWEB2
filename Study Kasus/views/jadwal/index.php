<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/JadwalController.php';
include_once '../../controllers/BusController.php';
require '../../header.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$jadwalController = new JadwalController($db);
$jadwal = $jadwalController->getAllJadwal();
$busController = new BusController($db);
$bus = mysqli_fetch_assoc($jadwal);
$id_bus = $bus['id_bus'];
$bis = $busController->getBusById($id_bus);
?>


<div class="px-5 py-3">
    <h3 class="text-center">Data Jadwal Bus</h3>
    <a href="tambah" class="btn btn-primary mb-3">Tambah Jadwal</a>
    <table class="table table-striped text-center">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Bus</th>
                <th>Nomor Telepon</th>
                <th>Tujuan</th>
                <th>Kelas</th>
                <th>Jam Kedatangan</th>
                <th>Jam Keberangkatan</th>
                <th>Opsi</th>
            </tr>
        </thead>
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
                <td><?php echo $namaBus['nomor_telpon']; ?></td>
                <td><?php echo $jadwalData['tujuan'] ?></td>
                <td><?php echo $jadwalData['kelas'] ?></td>
                <td><?php echo $jadwalData['jam_datang'] ?></td>
                <td><?php echo $jadwalData['jam_berangkat'] ?></td>
                <td>
                    <a class="btn btn-warning" href="edit_jadwal?id_jadwal=<?php echo $jadwalData['id_jadwal']; ?>">Edit</a>
                    <a class="btn btn-danger" href="hapus_jadwal?id_jadwal=<?php echo $jadwalData['id_jadwal']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus..?')">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>

<div style="background-color: blue; color: white; text-align: center; padding: 10px;">
    &copy; 2023 Terminal Bus Cilacap
</div>

</div>