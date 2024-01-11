<?php
include_once '../../config.php';
include_once '../../controllers/BusController.php';
require '../../header.php';

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
    <div class="card px-3 py-3" style="margin: 119px auto; padding: 20px; max-width:400px">
        <h3 class="text-center">Edit Data Bus</h3>
        <?php
        // if ($busData) {
        ?>
        <form method="post" action="">
            <?php
            foreach ($busData as $x) {
            ?>
                <table>
                    <tr>
                        <td>Nama Bus</td>
                        <td>
                            <input type="text" name="nama_bus" value="<?php echo $x['nama_bus'] ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td>
                            <input type="number" name="nomor_telpon" value="<?php echo $x['nomor_telpon'] ?>" class="form-control">
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
        // }
        ?>
    </div>

    <div style="background-color: blue; color: white; text-align: center; padding: 10px;">
        &copy; 2023 Terminal Bus Cilacap
    </div>

</body>