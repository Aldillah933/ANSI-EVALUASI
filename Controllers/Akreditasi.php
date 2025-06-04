<?php

namespace App\Controllers;

use App\Models\PengisianIndikatorModel;
use App\Models\BuktiAkreditasiModel;
use App\Models\LogValidasiModel; // Tambahkan di atas jika belum ada


class Akreditasi extends BaseController
{
    public function uploadBuktiList()
{
    $indikatorModel = new PengisianIndikatorModel();
    $buktiModel = new BuktiAkreditasiModel();

    $data['indikator'] = $indikatorModel->findAll();

    // Ambil bukti untuk setiap indikator
    foreach ($data['indikator'] as &$ind) {
    $ind['bukti'] = $buktiModel->where('indikator_id', $ind['indikator_id'])->findAll();
}

          return view('akreditasi/upload_bukti', $data);
    }

    public function uploadBuktiProcess($indikator_id)
    {
        $buktiModel = new BuktiAkreditasiModel();

        $file = $this->request->getFile('file_bukti');
        #var_dump(WRITEPATH);die;
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads/bukti_akreditasi/', $newName);

            $buktiModel->insert([
                'indikator_id' => $indikator_id,
                'nama_dokumen' => $file->getClientName(),
                'file_path' => $newName,
                'uploaded_at' => date('Y-m-d H:i:s')
            ]);

            session()->setFlashdata('success', 'File bukti berhasil diupload.');
        } else {
            session()->setFlashdata('error', 'Gagal upload file.');
        }

        return redirect()->to('/upload-bukti');
    }

    public function deleteBukti($bukti_id)
    {
        $buktiModel = new BuktiAkreditasiModel();
        $bukti = $buktiModel->find($bukti_id);
#var_dump($bukti['file_path']);die;
        if ($bukti) {
            $filePath = WRITEPATH . 'uploads/bukti_akreditasi/' . $bukti['file_path'];
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $buktiModel->delete($bukti_id);
            session()->setFlashdata('success', 'File bukti berhasil dihapus.');
        } else {
            session()->setFlashdata('error', 'File bukti tidak ditemukan.');
        }

        return redirect()->to('/upload-bukti');
    }
    public function validasi($id)
{
    $indikatorModel = new \App\Models\PengisianIndikatorModel();
    $buktiModel = new \App\Models\BuktiAkreditasiModel();
    $logValidasiModel = new \App\Models\LogValidasiModel();

    $data['indikator'] = $indikatorModel->find($id);
    $data['bukti'] = $buktiModel->where('indikator_id', $id)->findAll();
    $data['log_validasi'] = $logValidasiModel->getValidasiByIndikator($id);

    return view('akreditasi/validasi', $data);
}

public function validasiDokumen()
{
    $model = new LogValidasiModel();
    $data['log_validasi'] = $model->findAll();

    return view('akreditasi/validasi_dokumen', $data);
}



}
