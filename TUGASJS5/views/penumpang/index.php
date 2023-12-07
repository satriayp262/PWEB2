<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/PenumpangController.php';
include_once '../../controllers/BusController.php';
require '../../header.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$penumpangController = new PenumpangController($db);
$penumpang = $penumpangController->getAllPenumpang();
$busController = new BusController($db);
$bus = mysqli_fetch_assoc($penumpang);
$id_bus = $bus['id_bus'];
$bis = $busController->getBusById($id_bus);
?>


<div class="px-5 py-3" >
    <h3 class="text-center">Data Jumlah Penumpang Bus</h3>
    <a href="tambah_penumpang" class="btn btn-primary mb-3">Tambah Penumpang</a>
    <table class="table table-striped text-center">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Bus</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Jumlah</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($penumpang as $penumpangData) {
            // Ambil nama bus berdasarkan id_bus pada setiap data
            $busData = $busController->getBusById($penumpangData['id_bus']);
            $namaBus = mysqli_fetch_assoc($busData);
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $namaBus['nama_bus']; ?></td>
                <td><?php echo $penumpangData['bulan'] ?></td>
                <td><?php echo $penumpangData['tahun'] ?></td>
                <td><?php echo $penumpangData['jumlah'] ?></td>
                <td>
                    <a class="btn btn-warning" href="edit_penumpang?id_pa=<?php echo $penumpangData['id_pa']; ?>">Edit</a>
                    <a class="btn btn-danger" href="hapus_penumpang?id_pa=<?php echo $penumpangData['id_pa']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus..?')">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>

<div class="fixed-bottom" style="background-color: blue; color: white; text-align: center; padding: 10px;">
    &copy; 2023 Terminal Bus Cilacap
</div>

</div>