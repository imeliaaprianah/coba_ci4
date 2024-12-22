<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;


class PerubahanDayaAdmin extends BaseController
{
    protected $PerubahanDayaM;

    public function index()
    {
        return view('admin/data_pelanggan_pd');
    }

    public function tambah()
    {
        return view('admin/tambah_data_pelanggan_pd');
    }

    public function simpan()
    {
        // Validasi input
        $validation = $this->validate([
            'alamat' => 'required',
            'idpel' => 'required|numeric',
            'nama_pelanggan' => 'required',
            'surat_mohon_perubahan_daya' => 'uploaded[surat_mohon_perubahan_daya]|mime_in[surat_mohon_perubahan_daya,application/pdf,image/jpg,image/jpeg,image/png]|max_size[surat_mohon_perubahan_daya,2048]',
            'no_handphone' => 'required|numeric',
            'ktp' => 'required|numeric',
            'npwp' => 'required|numeric',
        ]);

        if (!$validation) {
            // Kembali ke halaman tambah data dengan pesan error
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Proses upload file
        $fileSurat = $this->request->getFile('surat_mohon_perubahan_daya');
        $namaSurat = $fileSurat->getRandomName(); // Generate nama file unik
        $fileSurat->move('uploads/surat', $namaSurat);

        // Simpan data ke database
        $this->PerubahanDayaM->save([
            'alamat' => $this->request->getPost('alamat'),
            'idpel' => $this->request->getPost('idpel'),
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'surat_mohon_perubahan_daya' => $namaSurat,
            'no_handphone' => $this->request->getPost('no_handphone'),
            'ktp' => $this->request->getPost('ktp'),
            'npwp' => $this->request->getPost('npwp'),
        ]);

        // Redirect ke halaman utama dengan pesan sukses
        return redirect()->to('/admin/data_pelanggan_pd')->with('success', 'Data berhasil ditambahkan');
    }
}
