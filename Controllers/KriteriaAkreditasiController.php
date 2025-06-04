<?php

namespace App\Controllers;

use App\Models\IndikatorAkreditasiModel;

class KriteriaAkreditasiController extends BaseController
{
    
    public function index()
    {
        $model = new IndikatorAkreditasiModel();
        $data['indikator'] = $model->findAll();

        return view('kriteria_akreditasi', $data);
    }
    public function create()
{
    return view('form_indikator');
}

public function store()
{
    $model = new IndikatorAkreditasiModel();

    $data = [
        'kriteria' => $this->request->getPost('kriteria'),
        'indikator' => $this->request->getPost('indikator'),
        'deskripsi' => $this->request->getPost('deskripsi'),
    ];

    $model->insert($data);
    return redirect()->to('/kriteria-akreditasi');
}

}
