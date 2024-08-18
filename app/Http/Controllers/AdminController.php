<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        session()->flash('admin_alert', 'Selamat datang di halaman admin!');

        return view('admin.index');
    }
}
