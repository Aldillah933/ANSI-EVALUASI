<?php

namespace App\Controllers;

class UserDashboard extends BaseController
{
    public function index()
    {
        return view('user/dashboard');
    }
    
}
