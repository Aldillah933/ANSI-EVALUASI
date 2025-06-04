<?php

namespace App\Controllers;
use App\Models\EvaluasiMatkulModel;
use App\Models\EvaluasiDosenModel;

class Evaluasi extends BaseController
{

    public function saveDosen()
{
    $model = new EvaluasiDosenModel();

    $data = [
        'nama_dosen' => $this->request->getPost('nama_dosen'),
        'penilaian'  => $this->request->getPost('penilaian'),
        'komentar'   => $this->request->getPost('komentar'),
    ];

    if ($model->insert($data)) {
        return redirect()->to('/evaluasi/dosen')->with('success', 'Evaluasi dosen berhasil disimpan.');
    } else {
        return redirect()->back()->with('error', 'Gagal menyimpan data dosen');
    }
}

    public function saveMatkul()
    {
        $model = new EvaluasiMatkulModel();

        $data = [
            'nama_mata_kuliah' => $this->request->getPost('nama_mata_kuliah'),
            'penilaian'        => $this->request->getPost('penilaian'),
            'komentar'         => $this->request->getPost('komentar'),
            'created_at'       => date('Y-m-d H:i:s'),
        ];

        if ($model->insert($data)) {
            return redirect()->to('/evaluasi/matkul')->with('success', 'Data berhasil disimpan');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan data matkul');
        }
    }

    public function dosen()
    {
        return view('user/evaluasi_dosen'); // 🟢 nama folder dan file view
    }

public function matkul()
{
    helper('form');  // Load form helper biar set_value() bisa dipakai
    return view('user/evaluasi_matkul');
}

public function admin()
{
    $dosenModel = new \App\Models\EvaluasiDosenModel();
    $matkulModel = new \App\Models\EvaluasiMatkulModel();

    $data['dosen'] = $dosenModel->findAll();
    $data['matkul'] = $matkulModel->findAll();

    return view('evaluasi_admin/index', $data);
}


public function adminDosen()
{
    $dosenModel = new \App\Models\EvaluasiDosenModel();
    $data['dosen'] = $dosenModel->findAll();
    return view('evaluasi_dosen/index', $data);
}

public function adminMatkul()
{
    $matkulModel = new \App\Models\EvaluasiMatkulModel();
    $data['matkul'] = $matkulModel->findAll();
    return view('evaluasi_matkul/index', $data);
}


}
