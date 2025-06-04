<?php
// File: app/Controllers/UploadBukti.php

namespace App\Controllers;

use App\Models\BuktiModel;
use CodeIgniter\Controller;

class UploadBukti extends Controller
{
    public function process($indikator_id)
    {
        $file = $this->request->getFile('file_bukti');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();

            // Pastikan direktori tujuan ada
            $uploadPath = FCPATH . 'uploads/bukti_akreditasi/';
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true); // buat folder jika belum ada
            }

            // Pindahkan file ke folder public
            $file->move($uploadPath, $newName);

            $model = new BuktiModel();
            $model->save([
                'indikator_id' => $indikator_id,
                'nama_dokumen' => $file->getClientName(),
                'file_path' => $newName,
                'uploaded_by' => session()->get('user_id'),
                'nama_prodi' => session()->get('nama_prodi'),
            ]);

            return redirect()->back()->with('success', 'Dokumen berhasil diupload.');
        }

        return redirect()->back()->with('error', 'Gagal upload dokumen.');
    }

    public function delete($id)
    {
        $model = new BuktiModel();
        $bukti = $model->find($id);

        if ($bukti) {
            $path = WRITEPATH . 'uploads/bukti_akreditasi/' . $bukti['file_path'];
            if (file_exists($path)) {
                unlink($path);
            }

            $model->delete($id);
            return redirect()->back()->with('success', 'Dokumen berhasil dihapus.');
        }

        return redirect()->back()->with('error', 'Dokumen tidak ditemukan.');

    }
    public function download($id)
{
    $model = new \App\Models\BuktiModel();
    $bukti = $model->find($id);
    #var_dump(FCPATH);die;

    if (!$bukti) {
        return redirect()->back()->with('error', 'Dokumen tidak ditemukan.');
    }

    $filePath = WRITEPATH . 'uploads/bukti_akreditasi/' . $bukti['file_path'];
    

    if (!file_exists($filePath)) {
        return redirect()->back()->with('error', 'File tidak ditemukan di server.');
    }

    return $this->response->download($filePath, null);
}

}

