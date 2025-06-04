<?php

namespace App\Models;

use CodeIgniter\Model;

class IndikatorAkreditasiModel extends Model
{
    protected $table = 'indikator_akreditasi';
    protected $primaryKey = 'indikator_id';
    protected $allowedFields = ['kriteria', 'indikator', 'deskripsi'];
}
