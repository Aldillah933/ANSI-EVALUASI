<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $dosenId = session()->get('dosen_id');

    if (!$dosenId) {
        return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu.');
    }
    
        if (!session()->get('isLoggedIn')) {
            // Redirect ke login kalau belum login
            return redirect()->to(base_url('/login'));
        }

        // Jika sudah login, load view dashboard
        return view('dashboard');
    }
}
