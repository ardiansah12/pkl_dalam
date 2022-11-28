<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailWisata;
use App\Models\wisata;
use App\Models\UmpanBalik;

class DataController extends Controller
{
    public function wisata()
    {
        $wisata = Wisata::all();
        return view('informasi.wisata', compact('wisata'));
    }
}
