<?php

namespace App\Controllers;
use App\Models\EvaluasiMatkulModel;

class EvaluasiMatkul extends BaseController
{
    public function index()
    {
        return view('user/evaluasi_matkul');
    }

    public function simpan()
    {
        $model = new EvaluasiMatkulModel();

        $data = [
            'nama_mata_kuliah' => $this->request->getPost('nama_mata_kuliah'),
            'penilaian'        => $this->request->getPost('penilaian'),
            'komentar'         => $this->request->getPost('komentar'),
        ];

        $model->insert($data);
        return redirect()->to('user/evaluasi_matkul')->with('pesan', 'Evaluasi berhasil dikirim.');
    }
}
