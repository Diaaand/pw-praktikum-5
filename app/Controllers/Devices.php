<?php

namespace App\Controllers;

use App\Models\DeviceModel;

class Devices extends BaseController
{
    protected $deviceModel;
    public function __construct()
    {
        $this->deviceModel = new DeviceModel();
    }

    public function list()
    {
        $devices = $this->deviceModel->findAll();

        $data = [
            'title' => 'Devices | Praktikum 5',
            'devices' => $devices
        ];

        return view('devices/list', $data);
    }
}
