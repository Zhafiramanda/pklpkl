<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumni;
use App\Models\Testimoni;

class AlumniController extends Controller
{
    public function Dashboard()
    {

        return view('alumni.dashboard');
    }
    public function testi()
    {
        $testimonis = Testimoni::all();

        return view('alumni.dashboard', compact('testimonis'));
    }
}

