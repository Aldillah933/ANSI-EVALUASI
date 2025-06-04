<?php

namespace App\Controllers;
use App\Models\NilaiMahasiswaModel;

class NilaiMahasiswa extends BaseController
{
    public function index()
    {
        $model = new NilaiMahasiswaModel();
        $data['nilai'] = $model->getNilaiLengkap();

        return view('nilai_mahasiswa/index', $data);
    }
}
