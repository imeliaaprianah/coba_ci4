<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PenggunaM;
use CodeIgniter\HTTP\ResponseInterface;

class Pengguna extends BaseController
{
    protected $Pengguna;
    protected $table = "pengguna";

    public function __construct()
    {
        $this->Pengguna = new PenggunaM();
    }

    public function index()
    {
        $getdata = $this->Pengguna->getdata();

        $data = array(
            "dataakun" => $getdata,
        );

        return view('admin/pengguna',$data);
    }

    public function tambah()
    {
        return view('admin/tambah_pengguna');
    }

    public function simpan()
    {
        $username = $this->request->getPost("username");
        $password = $this->request->getPost("password");        
        $level = $this->request->getPost("level");


        // Validasi input
        $validation = $this->validate([
            'username' => 'required|alpha_numeric|min_length[5]|is_unique[users.username]',
            'password' => 'required|min_length[8]',
            'level' => 'required|in_list[admin,user]',
        ]);

        $data = [
            'username' => $username,
            'password' => $password,
            'level' => $level,
        ];

        if (!$validation) {
            // Jika validasi gagal, kembali ke form tambah dengan pesan error
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Hash password sebelum menyimpan
        $hashedPassword = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT);

        // Simpan data ke database
        $this->Pengguna->save([
            'username' => $this->request->getPost('username'),
            'password' => $hashedPassword,
            'level' => $this->request->getPost('level'),
        ]);

        // Redirect ke halaman utama dengan pesan sukses
        return redirect()->to('/admin/pengguna')->with('success', 'Data berhasil disimpan');
    }
}
