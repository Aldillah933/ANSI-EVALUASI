<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramStudiModel extends Model
{
    protected $table = 'program_studi'; // sesuaikan nama tabel di DB
    protected $primaryKey = 'prodi_id';
    protected $allowedFields = ['nama_prodi'];
}
