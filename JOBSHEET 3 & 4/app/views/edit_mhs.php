<?php
include '../classes/databases.php';
$db = new database();
?>

<h3>Edit Data Mahasiswa</h3>
<form action="proses_mhs.php?aksi=update" method="post">
    <?php
    foreach ($db -> edit($_GET['id']) as $d){
    ?>
    <table>
        <tr>
            <td>NIM</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                <input type="text" name="nim" value="<?php echo $d['nim'] ?>">
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $d['nama'] ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" cols="30" rows="5"><?php echo $d['alamat'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" onclick="showAlert()"></input></td>
        </tr>
    </table>
    <?php
    }
    ?>
</form>
<script>
    function showAlert(){
        alert("Berhasil Diedit!");
    }
</script>