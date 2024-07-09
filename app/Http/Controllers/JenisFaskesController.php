<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisFaskesController extends Controller
{
    public function jenisfaskes()
    {
        return view('admin.index');
    }
}
