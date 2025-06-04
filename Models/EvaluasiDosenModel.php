<?php

namespace App\Models;

use CodeIgniter\Model;

class EvaluasiDosenModel extends Model
{
    protected $table = 'evaluasi_dosen';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_user', 'penilaian', 'komentar']; // sesuaikan dengan kolom Anda

    public function getEvaluasiWithUser()
    {
        return $this->select('evaluasi_dosen.*, users.nama_lengkap')
                    ->join('users', 'users.user_id = evaluasi_dosen.user_id')

                    ->findAll();
    }
    
}
