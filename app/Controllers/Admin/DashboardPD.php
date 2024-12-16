<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboardpd extends BaseController
{
    public function index()
    {
        return view('admin/dashboard_pd');
    }
}