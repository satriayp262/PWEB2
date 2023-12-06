<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/BusController.php';
require '../../header.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$busController = new busController($db);
$bus = $busController->getAllBus();
?>


<div class="px-5 py-3">
    <h3 class="text-center">Data Bus</h3>
    <a href="tambah_bus" class="btn btn-primary mb-3">Tambah Bus</a>
    <table class="table table-striped text-center">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Bus</th>
                <th>Nomor Telepon</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($bus as $x) {
        ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $x['nama_bus'] ?></td>
                    <td><?php echo $x['nomor_telpon'] ?></td>
                    <td>
                        <a class="btn btn-warning" href="edit_bus?id_bus=<?php echo $x['id_bus']; ?>">Edit</a>
                        <a class="btn btn-danger" href="hapus_bus?id_bus=<?php echo $x['id_bus']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus..?')">Hapus</a>
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