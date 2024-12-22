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
            'no_handphone' => 'required|numeric',
            'ktp' => 'required|numeric',
            'npwp' => 'required|numeric',
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
            'no_handphone' => $this->request->getPost('no_handphone'),
            'ktp' => $this->request->getPost('ktp'),
            'npwp' => $this->request->getPost('npwp'),
            'alamat_pasang_baru' => $this->request->getPost('alamat_pasang_baru'),
        ]);

        // Redirect ke halaman utama dengan pesan sukses
        return redirect()->to('/admin/data_pelanggan_pb')->with('success', 'Data berhasil ditambahkan');
    }

    //     public function detail($id)
    // {
    //     // Ambil data pelanggan berdasarkan ID
    //     $pelanggan = $this->PasangBaruM->find($id);

    //     // Jika data tidak ditemukan, kembalikan ke halaman utama dengan pesan error
    //     if (!$pelanggan) {
    //         return redirect()->to('/')->with('error', 'Data pelanggan tidak ditemukan');
    //     }

    //     // Tampilkan view detail dengan data pelanggan
    //     return view('pelanggan/detail', ['pelanggan' => $pelanggan]);

}