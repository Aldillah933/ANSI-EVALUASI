<?php

namespace App\Controllers;

use App\Models\{UserModel, ProgramStudiModel, DosenModel, MahasiswaModel, MataKuliahModel, NilaiMahasiswaModel, EvaluasiDosenModel, EvaluasiMkModel, IndikatorAkreditasiModel, PengisianIndikatorModel, BuktiAkreditasiModel, LogValidasiModel, LogAksesModel};

class Akademik extends BaseController
{
    protected $userModel;
    protected $programStudiModel;
    protected $dosenModel;
    protected $mahasiswaModel;
    protected $mataKuliahModel;
    protected $nilaiMahasiswaModel;
    protected $evaluasiDosenModel;
    protected $evaluasiMkModel;
    protected $indikatorAkreditasiModel;
    protected $pengisianIndikatorModel;
    protected $buktiAkreditasiModel;
    protected $logValidasiModel;
    protected $logAksesModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->programStudiModel = new ProgramStudiModel();
        $this->dosenModel = new DosenModel();
        $this->mahasiswaModel = new MahasiswaModel();
        $this->mataKuliahModel = new MataKuliahModel();
        $this->nilaiMahasiswaModel = new NilaiMahasiswaModel();
        $this->evaluasiDosenModel = new EvaluasiDosenModel();
        $this->evaluasiMkModel = new EvaluasiMkModel();
        $this->indikatorAkreditasiModel = new IndikatorAkreditasiModel();
        $this->pengisianIndikatorModel = new PengisianIndikatorModel();
        $this->buktiAkreditasiModel = new BuktiAkreditasiModel();
        $this->logValidasiModel = new LogValidasiModel();
        $this->logAksesModel = new LogAksesModel();
    }

    public function index()
    {
        return view('dashboard');
    }

    public function semuaData()
    {
        $data = [
            'users' => $this->userModel->findAll(),
            'program_studi' => $this->programStudiModel->findAll(),
            'dosen' => $this->dosenModel->findAll(),
            'mahasiswa' => $this->mahasiswaModel->findAll(),
            'mata_kuliah' => $this->mataKuliahModel->findAll(),
            'nilai_mahasiswa' => $this->nilaiMahasiswaModel->findAll(),
            'evaluasi_dosen' => $this->evaluasiDosenModel->findAll(),
            'evaluasi_mk' => $this->evaluasiMkModel->findAll(),
            'indikator_akreditasi' => $this->indikatorAkreditasiModel->findAll(),
            'pengisian_indikator' => $this->pengisianIndikatorModel->findAll(),
            'bukti_akreditasi' => $this->buktiAkreditasiModel->findAll(),
            'log_validasi' => $this->logValidasiModel->findAll(),
            'log_akses' => $this->logAksesModel->findAll()
        ];

        return view('semua_data', $data);
    }

    // Kamu bisa tambahkan method-method lain untuk CRUD tiap tabel sesuai kebutuhan
}
