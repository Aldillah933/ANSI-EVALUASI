<?php namespace App\Controllers;

use App\Models\PengisianIndikatorModel;
use App\Models\BuktiAkreditasiModel;
use App\Models\LogValidasiModel;
use App\Models\IndikatorModel;

class AkreditasiController extends BaseController
{
    public function inputIndikator()
    {
        $model = new PengisianIndikatorModel();
        $data['indikator'] = $model->findAll();
        return view('akreditasi/input_indikator', $data);
    }

    public function simpanIndikator()
    {
        $model = new PengisianIndikatorModel();
        $model->save([
            'indikator_id' => $this->request->getPost('indikator_id'),
            'nilai_indikator' => $this->request->getPost('nilai_indikator'),
            'catatan' => $this->request->getPost('catatan'),
            'status_pengisian' => 'Belum Lengkap',
            'nama_prodi' => session()->get('nama_prodi')
        ]);
        return redirect()->to('/input-indikator');
    }

    public function uploadBukti()
{
    $indikatorModel = new IndikatorModel();
    $data['indikator'] = $indikatorModel->findAll(); // Ambil semua indikator

    return view('akreditasi/upload_bukti', $data);
}

    public function simpanBukti()
    {
        $file = $this->request->getFile('file_path');
        $fileName = $file->getRandomName();
        $file->move('uploads/bukti/', $fileName);

        $model = new BuktiAkreditasiModel();
        $model->save([
            'indikator_id' => $this->request->getPost('indikator_id'),
            'nama_dokumen' => $this->request->getPost('nama_dokumen'),
            'file_path' => 'uploads/bukti/' . $fileName,
            'uploaded_by' => session()->get('user_id'),
            'nama_prodi' => session()->get('nama_prodi')
        ]);

        return redirect()->to('/upload-bukti');
    }

    public function tracking()
    {
        $indikatorModel = new PengisianIndikatorModel();
        $buktiModel = new BuktiAkreditasiModel();
        $logModel = new LogValidasiModel();

        $data['indikator'] = $indikatorModel
            ->select('pengisian_indikator.*, bukti_akreditasi.nama_dokumen, log_validasi.status_validasi')
            ->join('bukti_akreditasi', 'pengisian_indikator.indikator_id = bukti_akreditasi.indikator_id', 'left')
            ->join('log_validasi', 'bukti_akreditasi.bukti_id = log_validasi.bukti_id', 'left')
            ->findAll();

        return view('akreditasi/input_indikator', $data);

    }

    public function validasi()
    {
        $buktiModel = new BuktiAkreditasiModel();
        $logModel = new LogValidasiModel();

        $data['bukti'] = $buktiModel
            ->select('bukti_akreditasi.*, users.nama_lengkap, log_validasi.status_validasi, log_validasi.catatan')
            ->join('users', 'bukti_akreditasi.uploaded_by = users.user_id', 'left')
            ->join('log_validasi', 'bukti_akreditasi.bukti_id = log_validasi.bukti_id', 'left')
            ->findAll();

        return view('akreditasi/validasi', $data);
    }

    public function prosesValidasi()
    {
        $model = new LogValidasiModel();
        $model->save([
            'bukti_id' => $this->request->getPost('bukti_id'),
            'validator_id' => session()->get('user_id'),
            'status_validasi' => $this->request->getPost('status_validasi'),
            'catatan' => $this->request->getPost('catatan')
        ]);
        return redirect()->to('/validasi-dokumen');
    }
}
