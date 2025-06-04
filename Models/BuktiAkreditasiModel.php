<?php

namespace App\Models;

use CodeIgniter\Model;

class BuktiAkreditasiModel extends Model
{
    protected $table = 'bukti_akreditasi';
    protected $primaryKey = 'bukti_id';
   protected $allowedFields = ['indikator_id', 'nama_dokumen', 'file_path', 'uploaded_at'];

}
