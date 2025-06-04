<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiMahasiswaModel extends Model
{
    protected $table = 'nilai_mahasiswa'; // nama tabel utama model ini
    protected $allowedFields = ['semester', 'nilai', 'nim', 'kode_mk'];

    public function getNilaiLengkap()
    {
        return $this->select('nilai_mahasiswa.*, mahasiswa.nama_mahasiswa, mata_kuliah.nama_mk')
                    ->join('mahasiswa', 'mahasiswa.nim = nilai_mahasiswa.nim')
                    ->join('mata_kuliah', 'mata_kuliah.kode_mk = nilai_mahasiswa.kode_mk')
                    ->findAll();
    }
}
