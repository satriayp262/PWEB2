<?php
require '../../index.php';
?>

<body>
    <div class="card px-3 py-3" style="margin: 25px auto; padding: 20px; max-width:400px">
        <h3 class="text-center">Tambah Data Bus</h3>
        <form action="proses_tambah_bus" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama_bus" class="form-control"></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td><input type="number" name="nomor_telpon" class="form-control"></td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>