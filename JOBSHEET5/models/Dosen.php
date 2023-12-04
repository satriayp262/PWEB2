<?php

class Dosen
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllDosen()
    {
        $query = "SELECT * FROM dosen";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createDosen($nidn, $nama, $jenis_kelamin, $agama, $alamat)
    {
        $query  = "INSERT INTO dosen (nidn,nama,jenis_kelamin,agama,alamat)
        values('$nidn', '$nama', '$jenis_kelamin', '$agama', '$alamat')";
        $result  = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getDosenById($id)
    {
        $query = "SELECT * FROM dosen WHERE id=$id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateDosen($id, $nidn, $nama, $jenis_kelamin, $agama, $alamat)
    {
        $query = "UPDATE dosen set nidn='$nidn', nama='$nama', jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat' where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteDosen($id)
    {
        $query = "DELETE FROM dosen WHERE id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
