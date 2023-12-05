<?php

include_once '../../models/jadwal.php';

class JadwalController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Jadwal($db);
    }

    public function getAllJadwal()
    {
        return $this->model->getAllJadwal();
    }
    public function createJadwal($id_bus, $tujuan, $kelas, $jamDatang, $jamBerangkat)
    {
        return $this->model->createJadwal($id_bus, $tujuan, $kelas, $jamDatang, $jamBerangkat);
    }

    public function getJadwalById($id_jadwal)
    {
        return $this->model->getJadwalById($id_jadwal);
    }

    public function updateJadwal($id_jadwal, $id_bus, $tujuan, $kelas, $jamDatang, $jamBerangkat)
    {
        return $this->model->updateJadwal($id_jadwal, $id_bus, $tujuan, $kelas, $jamDatang, $jamBerangkat);
    }

    public function deleteJadwal($id_jadwal)
    {
        return $this->model->deleteJadwal($id_jadwal);
    }
}
