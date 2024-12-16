<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;


class PerubahanDayaAdmin extends BaseController
{
    public function index()
    {
        return view('admin/data_pelanggan_pd');
    }
}

class TambahPerubahanDaya extends BaseController
{
    public function index()
    {
        return view('admin/tambah_data_pelanggan_pd');
    }
}