<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        session()->flash('success', 'Selamat datang di halaman Admin!');

        return view('admin.index');
    }
}
