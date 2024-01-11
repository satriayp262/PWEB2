<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/JadwalController.php';
include_once '../../controllers/BusController.php';
require '../../header.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$jadwalController = new jadwalController($db);
$jadwal = $jadwalController->getAllJadwal();
$busController = new busController($db);
$bus = mysqli_fetch_assoc($jadwal);
$pilihbus = $busController->getAllBus();
$id_bus = $bus['id_bus'];
$bis = $busController->getBusById($id_bus);
$namabis = mysqli_fetch_assoc($bis);
?>

<body>
    <div class="card px-3 py-3" style="margin: 60px auto; padding: 20px; max-width:400px">
        <h3 class="text-center">Tambah Data Jadwal</h3>
        <form action="proses_tambah" method="post">
            <table>
                <tr>
                    <td>Nama Bus</td>
                    <td>
                        <select name="nama_bus" id="id_bus" class="form-control">
                            <option value="pilih bus">Pilih Bus</option>
                            <?php foreach ($pilihbus as $x) { ?>
                                <option value="<?php echo $x['id_bus']; ?>"><?php echo $x['nama_bus']; ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tujuan</td>
                    <td><input type="text" name="tujuan" class="form-control"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td><input type="text" name="kelas" class="form-control"></td>
                </tr>
                <tr>
                    <td>Jam Kedatangan</td>
                    <td><input type="time" name="jam_datang" class="form-control"></td>
                </tr>
                <tr>
                    <td>Jam Keberangkatan</td>
                    <td><input type="time" name="jam_berangkat" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div style="background-color: blue; color: white; text-align: center; padding: 10px;">
        &copy; 2023 Terminal Bus Cilacap
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>