<?php

namespace App\Models;

use CodeIgniter\Model;

class PengisianIndikatorModel extends Model
{
    protected $table = 'pengisian_indikator';
    protected $primaryKey = 'id_pengisian';
    protected $allowedFields = ['id_pengisian', 'id_indikator', 'nama_prodi', 'tahun_pengisian', 'status_pengisian'];
}
