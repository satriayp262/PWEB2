<?php

class Penumpang
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllPenumpang()
    {
        $query = "SELECT * FROM penumpang";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createPenumpang($idBus, $bulan, $tahun, $jumlah)
    {
        $query  = "INSERT INTO penumpang (id_bus, bulan, tahun, jumlah)
        VALUES ('$idBus', '$bulan', '$tahun', '$jumlah')";
        $result  = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getPenumpangById($id_pa)
    {
        $query = "SELECT * FROM penumpang WHERE id_pa=$id_pa";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updatePenumpang($id_pa, $idBus, $bulan, $tahun, $jumlah)
    {
        $query = "UPDATE penumpang SET id_bus='$idBus', bulan='$bulan', tahun='$tahun', jumlah='$jumlah' WHERE id_pa='$id_pa'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePenumpang($id_pa)
    {
        $query = "DELETE FROM penumpang WHERE id_pa='$id_pa'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
