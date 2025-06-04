<?php

namespace App\Controllers;
use App\Models\MataKuliahModel;

class MataKuliah extends BaseController
{
    public function index()
    {
        $model = new MataKuliahModel();
        $data['mataKuliah'] = $model->findAll();
        return view('MataKuliah/index', $data);
    }
}
