<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PasangBaruAdmin extends BaseController
{
    public function index()
    {
        return view('admin/data_pelanggan_pb');
    }
}
