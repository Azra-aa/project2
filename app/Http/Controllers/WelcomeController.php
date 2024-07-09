<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faskes;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $jenis_faskes_id = $request->input('jenis_faskes_id');
        $query = Faskes::query();

        if ($jenis_faskes_id) {
            $query->where('jenis_faskes_id', $jenis_faskes_id);
        }

        $list_faskes = $query->get();

        return view('welcome', compact('list_faskes', 'jenis_faskes_id'));
    }
}
