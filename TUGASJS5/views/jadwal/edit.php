<?php

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
$pilihbus = $busController->getAllBus();
$id_bus = $bus['id_bus'];
$bis = $busController->getBusById($id_bus);
$namabis = mysqli_fetch_assoc($bis);

if (isset($_GET['id_jadwal'])) {
    $id_jadwal = $_GET['id_jadwal'];

    $jadwalController = new JadwalController($db);
    $jadwalData = $jadwalController->getJadwalById($id_jadwal);

    if ($jadwalData) {
        if (isset($_POST['submit'])) {
            $id_bus = $_POST['nama_bus'];
            $tujuan = $_POST['tujuan'];
            $kelas = $_POST['kelas'];
            $jamDatang = $_POST['jam_datang'];
            $jamBerangkat = $_POST['jam_berangkat'];

            $result = $jadwalController->updateJadwal($id_jadwal, $id_bus, $tujuan, $kelas, $jamDatang, $jamBerangkat);

            if ($result) {
                header("location:jadwal");
            } else {
                header("location:edit");
            }
        }
    } else {
        echo "Jadwal Tidak Ditemukan!";
    }
}
?>

<body>
    <div class="card px-3 py-3" style="margin: 25px auto; padding: 20px; max-width:400px">
        <h3 class="text-center">Edit Data Jadwal</h3>
        <?php
        if ($jadwalData) {
        ?>
            <form method="post" action="">
                <?php
                if ($jadwalData) {
                ?>
                    <table>
                        <tr>
                            <td>Nama Bus</td>
                            <td>
                                <select name="nama_bus" id="id_bus">
                                    <option value="pilih bus">Pilih Bus</option>
                                    <?php foreach ($pilihbus as $x) { ?>
                                        <option value="<?php echo $x['id_bus']; ?>" <?php echo ($x['id_bus'] == $jadwalData['id_bus']) ? 'selected' : ''; ?>>
                                            <?php echo $x['nama_bus']; ?>
                                        </option>
                                    <?php } ?>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tujuan</td>
                            <td>
                                <input type="text" name="tujuan" value="<?php echo $jadwalData['tujuan'] ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>
                                <input type="text" name="kelas" value="<?php echo $jadwalData['kelas'] ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Jam Kedatangan</td>
                            <td>
                                <input type="text" name="jam_datang" value="<?php echo $jadwalData['jam_datang'] ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Jam Keberangkatan</td>
                            <td>
                                <input type="text" name="jam_berangkat" value="<?php echo $jadwalData['jam_berangkat'] ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </td>
                        </tr>
                    <?php
                }
                    ?>
                    </table>
            </form>
        <?php
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>