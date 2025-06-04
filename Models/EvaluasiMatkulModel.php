<?php

namespace App\Models;

use CodeIgniter\Model;

class EvaluasiMatkulModel extends Model
{
    protected $table = 'evaluasi_matkul';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'nama_mata_kuliah', 'penilaian', 'komentar', 'created_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = '';

    public function getEvaluasiWithUser()
    {
        return $this->select('evaluasi_matkul.*, users.nama_lengkap')
                    ->join('users', 'users.user_id = evaluasi_matkul.user_id')
                    ->findAll();
    }
}
