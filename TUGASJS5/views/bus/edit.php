<?php
include_once '../../config.php';
include_once '../../controllers/BusController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id_bus'])) {
    $id_bus = $_GET['id_bus'];

    $busController = new BusController($db);
    $busData = $busController->getBusById($id_bus);

    if ($busData) {
        if (isset($_POST['submit'])) {
            $nama_bus = $_POST['nama_bus'];
            $nomor_telpon = $_POST['nomor_telpon'];

            $result = $busController->updateBus($id_bus, $nama_bus, $nomor_telpon);

            if ($result) {
                header("location:bus");
            } else {
                header("location:edit");
            }
        }
    } else {
        echo "Bus Tidak Ditemukan!";
    }
}
?>

<body>
    <div class="card px-3 py-3" style="margin: 25px auto; padding: 20px; max-width:400px">
        <h3 class="text-center">Edit Data Bus</h3>
        <?php
        if ($busData) {
        ?>
            <form method="post" action="">
                <?php
                if ($busData) {
                ?>
                    <table>
                        <tr>
                            <td>Nama Bus</td>
                            <td>
                                <input type="text" name="nama_bus" value="<?php echo $busData['nama_bus'] ?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Nomor Telepon</td>
                            <td>
                                <input type="number" name="nomor_telpon" value="<?php echo $busData['nomor_telpon'] ?>" class="form-control">
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