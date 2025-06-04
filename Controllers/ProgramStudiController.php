<?php

namespace App\Controllers;

use App\Models\ProgramStudiModel;

class ProgramStudiController extends BaseController
{
    public function create()
{
    $data['title'] = 'Tambah Program Studi';
    return view('program_studi/form', $data);
}

public function edit($id)
{
    $model = new \App\Models\ProgramStudiModel();
    $data['program_studi'] = $model->find($id);
    $data['title'] = 'Edit Program Studi';
    return view('program_studi/form', $data);
}

public function store()
{
    $model = new \App\Models\ProgramStudiModel();

    $data = [
        'nama_prodi' => $this->request->getPost('nama_prodi'),
        'jenjang' => $this->request->getPost('jenjang'),
        'status_akreditasi' => $this->request->getPost('status_akreditasi'),
        'tahun_akreditasi' => $this->request->getPost('tahun_akreditasi'),
    ];

    $model->save($data);
    return redirect()->to('/program-studi');
}

    public function index()
{
    $model = new \App\Models\ProgramStudiModel();
    $data['program_studi'] = $model->findAll();
    $data['title'] = 'Program Studi';  // Menambahkan variabel title

    return view('program_studi/index', $data);  // Mengirimkan data ke view
}


}
