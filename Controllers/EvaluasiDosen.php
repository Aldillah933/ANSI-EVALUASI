<?php

namespace App\Controllers;
use App\Models\EvaluasiDosenModel;

class EvaluasiDosen extends BaseController
{
    public function index()
    {
        $model = new EvaluasiDosenModel();
        $data['evaluasi'] = $model->getEvaluasiLengkap(); // nama variabel yang dipakai di view

        return view('evaluasi_dosen/index', $data);
    }
}
