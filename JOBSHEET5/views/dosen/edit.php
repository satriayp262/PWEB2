<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($id);

    if ($dosenData) {
        if (isset($_POST['submit'])) {
            $nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];

            $result = $dosenController->updatedosen($id, $nidn, $nama, $jenis_kelamin, $agama, $alamat);

            if ($result) {
                header("location:dosen");
            } else {
                header("location:edit");
            }
        }
    } else {
        echo "Dosen Tidak Ditemukan!";
    }
}
?>

<body>
    <div class="card px-3 py-3" style="margin: 25px auto; padding: 20px; max-width:400px">
        <h3 class="text-center">Edit Data Dosen</h3>
        <?php
        if ($dosenData) {
        ?>
            <form method="post" action="">
                <?php
                if ($dosenData) {
                ?>
                    <table>
                        <tr>
                            <td>NIDN</td>
                            <td>
                                <input type="number" name="nidn" value="<?php echo $dosenData['nidn'] ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>
                                <input type="text" name="nama" value="<?php echo $dosenData['nama'] ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="Laki-laki" <?php if ($dosenData['jenis_kelamin'] === 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                                    <option value="Perempuan" <?php if ($dosenData['jenis_kelamin'] === 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>
                                <select name="agama" class="form-control">
                                    <option value="Islam" <?php if ($dosenData['agama'] === 'Islam') echo 'selected'; ?>>Islam</option>
                                    <option value="Kristen" <?php if ($dosenData['agama'] === 'Kristen') echo 'selected'; ?>>Kristen</option>
                                    <option value="Katholik" <?php if ($dosenData['agama'] === 'Katholik') echo 'selected'; ?>>Katholik</option>
                                    <option value="Hindu" <?php if ($dosenData['agama'] === 'Hindu') echo 'selected'; ?>>Hindu</option>
                                    <option value="Budha" <?php if ($dosenData['agama'] === 'Budha') echo 'selected'; ?>>Budha</option>
                                    <option value="Konghuchu" <?php if ($dosenData['agama'] === 'Konghuchu') echo 'selected'; ?>>Konghuchu</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>
                                <textarea name="alamat" cols="30" rows="5" class="form-control"><?php echo $dosenData['alamat']; ?></textarea>
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