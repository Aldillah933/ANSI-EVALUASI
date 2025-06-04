<?php

namespace App\Controllers;

use App\Models\EvaluasiMatkulModel;
use CodeIgniter\Controller;

class AdminEvaluasiMatkul extends Controller
{
    public function index()
    {
        $model = new EvaluasiMatkulModel();

        // ambil data evaluasi dan nama lengkap mahasiswa
        $data['matkul'] = $model->getEvaluasiWithUser();

        // tampilkan ke view
        return view('evaluasi_matkul/index', $data);
    }
}
