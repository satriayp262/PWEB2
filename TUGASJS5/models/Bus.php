<?php

class Bus
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllBus()
    {
        $query = "SELECT * FROM bus";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createBus($nama_bus, $nomor_telpon)
    {
        $query  = "INSERT INTO bus (nama_bus, nomor_telpon) VALUES ('$nama_bus', '$nomor_telpon')";
        $result  = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getBusById($id_bus)
    {
        $query = "SELECT * FROM bus WHERE id_bus=$id_bus";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function updateBus($id_bus, $nama_bus, $nomor_telpon)
    {
        $query = "UPDATE bus SET nama_bus='$nama_bus', nomor_telpon='$nomor_telpon' WHERE id_bus='$id_bus'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteBus($id_bus)
    {
        $query = "DELETE FROM bus WHERE id_bus='$id_bus'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}

