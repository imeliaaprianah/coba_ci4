<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboardpb extends BaseController
{
    public function index()
    {
        return view('admin/dashboard_pb');
    }
}

class PasangBaruAdmin extends BaseController
{
    public function index()
    {
        return view('admin/data_pelanggan_pb');
    }
}

class TambahPasangBaru extends BaseController
{
    public function index()
    {
        return view('admin/tambah_data_pelanggan_pb');
    }
}
