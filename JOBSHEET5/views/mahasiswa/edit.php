<?php

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $mahasiswaController = new MahasiswaController($db);
    $mahasiswaData = $mahasiswaController->getMahasiswaById($id);

    if ($mahasiswaData) {
        if (isset($_POST['submit'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];

            $result = $mahasiswaController->updateMahasiswa($id, $nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);

            if ($result) {
                header("location:mahasiswa");
            } else {
                header("location:edit");
            }
        }
    } else {
        echo "Mahasiswa Tidak Ditemukan!";
    }
}
?>

<body>
    <div class="card px-3 py-3" style="margin: 25px auto; padding: 20px; max-width:400px">
        <h3 class="text-center">Edit Data Mahasiswa</h3>
        <?php
        if ($mahasiswaData) {
        ?>
            <form method="post" action="">
                <?php
                if ($mahasiswaData) {
                ?>
                    <table>
                        <tr>
                            <td>NIM</td>
                            <td>
                                <input type="number" name="nim" value="<?php echo $mahasiswaData['nim'] ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>
                                <input type="text" name="nama" value="<?php echo $mahasiswaData['nama'] ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>
                                <input type="text" name="tempat_lahir" value="<?php echo $mahasiswaData['tempat_lahir'] ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>
                                <input type="date" name="tanggal_lahir" value="<?php echo $mahasiswaData['tanggal_lahir'] ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="Laki-laki" <?php if ($mahasiswaData['jenis_kelamin'] === 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                                    <option value="Perempuan" <?php if ($mahasiswaData['jenis_kelamin'] === 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>
                                <select name="agama" class="form-control">
                                    <option value="Islam" <?php if ($mahasiswaData['agama'] === 'Islam') echo 'selected'; ?>>Islam</option>
                                    <option value="Kristen" <?php if ($mahasiswaData['agama'] === 'Kristen') echo 'selected'; ?>>Kristen</option>
                                    <option value="Katholik" <?php if ($mahasiswaData['agama'] === 'Katholik') echo 'selected'; ?>>Katholik</option>
                                    <option value="Hindu" <?php if ($mahasiswaData['agama'] === 'Hindu') echo 'selected'; ?>>Hindu</option>
                                    <option value="Budha" <?php if ($mahasiswaData['agama'] === 'Budha') echo 'selected'; ?>>Budha</option>
                                    <option value="Konghuchu" <?php if ($mahasiswaData['agama'] === 'Konghuchu') echo 'selected'; ?>>Konghuchu</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>
                                <textarea name="alamat" cols="30" rows="5" class="form-control"><?php echo $mahasiswaData['alamat']; ?></textarea>
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