<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;


class SelesaiPB extends BaseController
{
    public function index()
    {
        return view('admin/selesai_pb');
    }
}