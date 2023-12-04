<?php

class Jadwal
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllJadwal()
    {
        $query = "SELECT * FROM jadwal";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createJadwal($idBus, $tujuan, $kelas, $jamDatang, $jamBerangkat)
    {
        $query  = "INSERT INTO jadwal (id_bus, tujuan, kelas, jam_datang, jam_berangkat)
        VALUES ('$idBus', '$tujuan', '$kelas', '$jamDatang', '$jamBerangkat')";
        $result  = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getJadwalById($id)
    {
        $query = "SELECT * FROM jadwal WHERE id=$id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateJadwal($idJadwal, $idBus, $tujuan, $kelas, $jamDatang, $jamBerangkat)
    {
        $query = "UPDATE jadwal SET id_bus='$idBus', tujuan='$tujuan', kelas='$kelas', jam_datang='$jamDatang', jam_berangkat='$jamBerangkat' WHERE id_jadwal='$idJadwal'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteJadwal($id)
    {
        $query = "DELETE FROM jadwal WHERE id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
