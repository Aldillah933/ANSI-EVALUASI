<?php

namespace App\Models;

use CodeIgniter\Model;

class LogValidasiModel extends Model
{
    protected $table = 'log_validasi';
    protected $primaryKey = 'log_id';
    protected $allowedFields = ['bukti_id', 'validator_id', 'status_validasi', 'catatan', 'waktu_validasi'];
}
