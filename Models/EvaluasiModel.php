<?php
namespace App\Models;

use CodeIgniter\Model;

class EvaluasiModel extends Model
{
    protected $table = 'evaluasi'; // Nama tabel di database
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_dosen', 'nama_matkul', 'nilai'];
}
