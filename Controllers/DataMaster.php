<?php

namespace App\Controllers;
use App\Models\ProgramStudiModel;
use App\Models\DosenModel;
use App\Models\MahasiswaModel;
use App\Models\MataKuliahModel;


class DataMaster extends BaseController
{
    public function index()
    {
        $programStudiModel = new ProgramStudiModel();
        $dosenModel = new DosenModel();
        $mahasiswaModel = new MahasiswaModel();
        $mataKuliahModel = new MataKuliahModel();
        

        $data = [
            'program_studi' => $programStudiModel->findAll(),
            'dosen' => $dosenModel->findAll(),
            'mahasiswa' => $mahasiswaModel->findAll(),
            'mata_kuliah' => $mataKuliahModel->findAll(),
            
        ];

        return view('data_master/index', $data);
    }
}
