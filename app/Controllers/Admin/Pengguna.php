<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Pengguna extends BaseController
{
    public function index()
    {
        return view('admin/pengguna');
    }
}

class TambahPengguna extends BaseController
{
    public function index()
    {
        return view('admin/tambah_pengguna');
    }
}
