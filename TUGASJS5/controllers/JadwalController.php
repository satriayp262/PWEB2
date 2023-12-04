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

    public function getJadwalById($id)
    {
        return $this->model->getJadwalById($id);
    }

    public function updateJadwal($idJadwal, $id_bus, $tujuan, $kelas, $jamDatang, $jamBerangkat)
    {
        return $this->model->updateJadwal($idJadwal, $id_bus, $tujuan, $kelas, $jamDatang, $jamBerangkat);
    }

    public function deleteJadwal($id)
    {
        return $this->model->deleteJadwal($id);
    }
}
