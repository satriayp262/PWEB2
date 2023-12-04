<?php

include_once '../../models/bus.php';

class BusController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Bus($db);
    }

    public function getAllBus()
    {
        return $this->model->getAllBus();
    }
    public function createBus($nama_bus, $nomor_telpon)
    {
        return $this->model->createBus($nama_bus, $nomor_telpon);
    }

    public function getBusById($id_bus)
    {
        return $this->model->getBusById($id_bus);
    }

    public function updateBus($idBus, $nama_bus, $nomor_telpon)
    {
        return $this->model->updateBus($idBus, $nama_bus, $nomor_telpon);
    }

    public function deleteBus($id_bus)
    {
        return $this->model->deleteJadwal($id_bus);
    }
}
