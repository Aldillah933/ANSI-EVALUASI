<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function create()
{
    $data['title'] = 'Tambah Mahasiswa';
    return view('mahasiswa/form', $data);
}

public function edit($id)
{
    $model = new MahasiswaModel();
    $data['mahasiswa'] = $model->find($id);
    $data['title'] = 'Edit Mahasiswa';
    return view('mahasiswa/form', $data);
}

public function store()
{
    $model = new MahasiswaModel();
    $data = [
        'nim' => $this->request->getPost('nim'),
        'nama' => $this->request->getPost('nama'),
        'prodi' => $this->request->getPost('prodi'),
        'angkatan' => $this->request->getPost('angkatan'),
    ];
    $model->save($data);
    return redirect()->to('/mahasiswa');
}

    public function index()
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->findAll();
        $data['title'] = 'Data Mahasiswa';

        return view('mahasiswa/index', $data);
    }
}
