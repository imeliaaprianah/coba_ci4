<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;


class TindakLanjutAdminPB extends BaseController
{
    public function index()
    {
        return view('admin/tindak_lanjut_pb');
    }
}