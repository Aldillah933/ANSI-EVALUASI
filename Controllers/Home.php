<?php

namespace App\Controllers;
use App\Filters\AdminFilter;
use App\Filters\Auth;

class Home extends BaseController
{

    public function index()
{
        // Jika admin dan sudah login, tampilkan dashboard
        return view('layout/dashboard');
    }
}
