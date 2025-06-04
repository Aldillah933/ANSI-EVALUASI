<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['username', 'password_hash', 'nama_lengkap', 'email', 'role', 'created_at'];

    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
