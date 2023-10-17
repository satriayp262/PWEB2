<h3>Tambah Data Dosen</h3>
<form action="proses_dsn.php?aksi=tambah" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>NIP</td>
            <td><input type="text" name="nip"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" cols="30" rows="5"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" onclick="showAlert()"></input></td>
        </tr>
    </table>
</form>
<script>
    function showAlert(){
        alert("Berhasil Ditambahkan!");
    }
</script>