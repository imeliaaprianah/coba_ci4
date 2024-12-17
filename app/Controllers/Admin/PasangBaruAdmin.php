<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;


class PasangBaruAdmin extends BaseController
{
    protected $PasangBaruM;

    public function index()
    {
        return view('admin/data_pelanggan_pb');
    }

    public function tambah()
    {
        return view('admin/tambah_data_pelanggan_pb');
    }

    public function simpan()
    {
        // Validasi input
        $validation = $this->validate([
            'nama_pelanggan' => 'required',
            'nama_pemohon' => 'required',
            'surat_mohon_pasang_baru' => 'required',
            'no_hp' => 'required|numeric',
            'ktp' => 'required',
            'npwp' => 'required',
            'alamat_pasang_baru' => 'required',
        ]);

        if (!$validation) {
            // Kembali ke halaman tambah data dengan pesan error
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Simpan data ke database
        $this->PasangBaruM->save([
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'nama_pemohon' => $this->request->getPost('nama_pemohon'),
            'surat_mohon_pasang_baru' => $this->request->getPost('surat_mohon_pasang_baru'),
            'no_hp' => $this->request->getPost('no_hp'),
            'ktp' => $this->request->getPost('ktp'),
            'npwp' => $this->request->getPost('npwp'),
            'alamat_pasang_baru' => $this->request->getPost('alamat_pasang_baru'),
        ]);

        // Redirect ke halaman utama dengan pesan sukses
        return redirect()->to('/')->with('success', 'Data berhasil ditambahkan');
    }
}
