<?php

include_once '../../config.php';
include_once '../../controllers/PenumpangController.php';
include_once '../../controllers/BusController.php';
require '../../header.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$penumpangController = new penumpangController($db);
$penumpang = $penumpangController->getAllPenumpang();
$busController = new busController($db);
$bus = mysqli_fetch_assoc($penumpang);
$pilihbus = $busController->getAllBus();
$id_bus = $bus['id_bus'];
$bis = $busController->getBusById($id_bus);
$namabis = mysqli_fetch_assoc($bis);

if (isset($_GET['id_pa'])) {
    $id_pa = $_GET['id_pa'];

    $penumpangController = new PenumpangController($db);
    $penumpangData = $penumpangController->getPenumpangById($id_pa);

    if ($penumpangData) {
        if (isset($_POST['submit'])) {
            $id_bus = $_POST['nama_bus'];
            $bulan = $_POST['bulan'];
            $tahun = $_POST['tahun'];
            $jumlah = $_POST['$jumlah'];

            $result = $penumpangController->updatePenumpang($id_pa, $id_bus, $bulan, $tahun, $jumlah);

            if ($result) {
                header("location:penumpang");
            } else {
                header("location:edit");
            }
        }
    } else {
        echo "Data Tidak Ditemukan!";
    }
}
?>

<body>
    <div class="card px-3 py-3" style="margin: 63px auto; padding: 20px; max-width:400px">
        <h3 class="text-center">Edit Data Jumlah Penumpang</h3>
        <?php
        if ($penumpangData) {
        ?>
            <form method="post" action="">
                <?php
                if ($penumpangData) {
                ?>
                    <table>
                        <tr>
                            <td>Nama Bus</td>
                            <td>
                                <select name="nama_bus" id="id_bus" class="form-control">
                                    <option value="pilih bus">Pilih Bus</option>
                                    <?php foreach ($pilihbus as $x) { ?>
                                        <option value="<?php echo $x['id_bus']; ?>" <?php echo ($x['id_bus'] == $penumpangData['id_bus']) ? 'selected' : ''; ?>>
                                            <?php echo $x['nama_bus']; ?>
                                        </option>
                                    <?php } ?>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>bulan</td>
                            <td>
                                <select name="bulan" class="form-control">
                                    <option value="Januari" <?php if ($penumpangData['bulan'] === 'Januari') echo 'selected'; ?>>Januari</option>
                                    <option value="Februari" <?php if ($penumpangData['bulan'] === 'Februari') echo 'selected'; ?>>Februari</option>
                                    <option value="Maret" <?php if ($penumpangData['bulan'] === 'Maret') echo 'selected'; ?>>Maret</option>
                                    <option value="April" <?php if ($penumpangData['bulan'] === 'April') echo 'selected'; ?>>April</option>
                                    <option value="Mei" <?php if ($penumpangData['bulan'] === 'Mei') echo 'selected'; ?>>Mei</option>
                                    <option value="Juni" <?php if ($penumpangData['bulan'] === 'Juni') echo 'selected'; ?>>Juni</option>
                                    <option value="Juli" <?php if ($penumpangData['bulan'] === 'Juli') echo 'selected'; ?>>Juli</option>
                                    <option value="Agustus" <?php if ($penumpangData['bulan'] === 'Agustus') echo 'selected'; ?>>Agustus</option>
                                    <option value="September" <?php if ($penumpangData['bulan'] === 'September') echo 'selected'; ?>>September</option>
                                    <option value="Oktober" <?php if ($penumpangData['bulan'] === 'Oktober') echo 'selected'; ?>>Oktober</option>
                                    <option value="November" <?php if ($penumpangData['bulan'] === 'November') echo 'selected'; ?>>November</option>
                                    <option value="Desember" <?php if ($penumpangData['bulan'] === 'Desember') echo 'selected'; ?>>Desember</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tahun</td>
                            <td>
                                <input type="text" name="tahun" value="<?php echo $penumpangData['tahun'] ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>
                                <input type="text" name="jumlah" value="<?php echo $penumpangData['jumlah'] ?>" class="form-control">
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

    <div style="background-color: blue; color: white; text-align: center; padding: 10px;">
        &copy; 2023 Terminal Bus Cilacap
    </div>

</body>