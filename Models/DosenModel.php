<?php

namespace App\Models;
use CodeIgniter\Model;

class DosenModel extends Model
{
    
    protected $table = 'dosen';
    protected $primaryKey = 'nidn';
    protected $allowedFields = ['nidn', 'nama_dosen', 'email', 'nama_prodi'];

    public function getAllDosen()
    {
        return $this->findAll();
    }

    public function getDosen($nidn)
    {
        return $this->find($nidn);
    }

    public function insertDosen($data)
    {
        return $this->insert($data);
    }

    public function updateDosen($nidn, $data)
    {
        return $this->update($nidn, $data);
    }
}
