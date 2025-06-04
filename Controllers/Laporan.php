<?php
namespace App\Controllers;

use App\Models\EvaluasiDosenModel;
use App\Models\IsiIndikatorModel;
use App\Models\NilaiModel;

class Laporan extends BaseController
{
    public function evaluasiDosen()
{
    $model = new EvaluasiDosenModel();
    $data['evaluasi'] = $model->getEvaluasiDosen(); // ini pakai yang versi join ke mata_kuliah
    return view('laporan/evaluasi_dosen', $data);
}


    public function evaluasiProdi()
    {
        $model = new IsiIndikatorModel();
        $data['indikator'] = $model->getIndikatorPerProdi();
        return view('laporan/evaluasi_prodi', $data);
    }

    public function kinerjaAkademik()
    {
        $model = new NilaiModel();
        $data['nilai'] = $model->getNilaiRekap();
        return view('laporan/kinerja_akademik', $data);
    }

    public function kesiapanAkreditasi()
    {
        $model = new IsiIndikatorModel();
        $data['kesiapan'] = $model->getKesiapanAkreditasi();
        return view('laporan/kesiapan_akreditasi', $data);
    }

    public function export()
    {
        return view('laporan/export_laporan');
    }
}
