<?php
// Menggunakan require_once untuk memastikan file index.php hanya di-require sekali jika sudah pernah di-include sebelumnya
require_once '../../index.php';
?>

<body>
    <div class="card px-3 py-3" style="margin: 25px auto; padding: 20px; max-width:400px">
        <h3 class="text-center">Tambah Data Jadwal</h3>
        <form action="proses_tambah" method="post"> <!-- Menambahkan ekstensi file PHP pada action -->
            <table>
                <tr>
                    <td>Nama Bus</td>
                    <td>
                        <select name="nama_bus" id="id_bus">
                            <?php
                            // Query untuk mengambil nama-nama bus dari tabel bus
                            $query = "SELECT id_bus, nama_bus FROM bus";
                            $result = mysqli_query($koneksi, $query);

                            // Memeriksa apakah query berhasil dijalankan
                            if ($result) {
                                // Loop untuk menampilkan nama-nama bus dalam dropdown
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['nama_bus'] . "'>" . $row['nama_bus'] . "</option>";
                                }
                            } else {
                                echo "<option value=''>Tidak ada data bus</option>";
                            }
                            ?>
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
                    <td><input type="text" name="jam_datang" class="form-control"></td>
                </tr>
                <tr>
                    <td>Jam Keberangkatan</td>
                    <td><input type="text" name="jam_berangkat" class="form-control"></td>
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
