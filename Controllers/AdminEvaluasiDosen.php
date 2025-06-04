<?php

namespace App\Controllers;

use App\Models\EvaluasiDosenModel;
use CodeIgniter\Controller;
use Config\Database;

class AdminEvaluasiDosen extends Controller
{
public function index()
{
    $model = new \App\Models\EvaluasiDosenModel();
    $data['evaluasi'] = $model->getEvaluasiWithUser();  // ambil data dari model

    return view('evaluasi_dosen/index', $data);  // kirim ke view dengan variabel 'evaluasi'
}

}
