<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Database\Config;

class DatabaseTest extends Controller
{
    public function index()
    {
        // Cek apakah koneksi berhasil
        $db = \Config\Database::connect();

        // Coba menjalankan query sederhana
        $query = $db->query('SELECT 1');

        // Jika query berhasil
        if ($query !== false) {
            echo 'Database connection is working!';
        } else {
            echo 'Database connection failed!';
        }
    }
}
