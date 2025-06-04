<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AdminController extends Controller
{
    protected $session;

    public function __construct()
    {
        $this->session = session();

        // Cek apakah user sudah login
        if (!$this->session->get('logged_in') || $this->session->get('role') !== 'admin') {
            // Jika belum login atau bukan admin, redirect ke halaman login
            header('Location: ' . base_url('login'));
            exit;
        }
    }

    public function index()
    {
        // Halaman dashboard admin
        return view('/');
    }
}
