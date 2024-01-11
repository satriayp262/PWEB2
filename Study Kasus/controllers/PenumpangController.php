<?php

include_once '../../models/penumpang.php';

class PenumpangController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Penumpang($db);
    }

    public function getAllPenumpang()
    {
        return $this->model->getAllPenumpang();
    }
    public function createPenumpang($idBus, $bulan, $tahun, $jumlah)
    {
        return $this->model->createPenumpang($idBus, $bulan, $tahun, $jumlah);
    }

    public function getPenumpangById($id_pa)
    {
        return $this->model->getPenumpangById($id_pa);
    }

    public function updatePenumpang($id_pa, $idBus, $bulan, $tahun, $jumlah)
    {
        return $this->model->updatePenumpang($id_pa, $idBus, $bulan, $tahun, $jumlah);
    }

    public function deletePenumpang($id_pa)
    {
        return $this->model->deletePenumpang($id_pa);
    }
}
