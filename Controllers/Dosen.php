<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DosenModel;
use App\Models\ProgramStudiModel; // ⬅️ Tambahkan ini!

class Dosen extends BaseController
{
    public function index()
    {
        $model = new DosenModel();
        $data['dosen'] = $model->getAllDosen();
        $data['title'] = 'Data Dosen';
        return view('dosen/index', $data);
    }

    public function create()
    {
        $programStudiModel = new ProgramStudiModel();
        $data['program_studi'] = $programStudiModel->findAll();
        $data['title'] = 'Form Tambah Dosen';

        return view('dosen/form', $data);
    }

    public function store()
    {
        $dosenModel = new DosenModel();

        $data = [
            'nidn' => $this->request->getPost('nidn'),
            'nama_dosen' => $this->request->getPost('nama_dosen'),
            'email' => $this->request->getPost('email'),
            'nama_prodi' => $this->request->getPost('nama_prodi'),
        ];

        $dosenModel->insert($data);

        return redirect()->to('/dosen')->with('success', 'Data dosen berhasil ditambahkan.');
    }
}
