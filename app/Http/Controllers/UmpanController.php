<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UmpanBalik;

class UmpanController extends Controller
{
    public function index()
    {
        $umpan = UmpanBalik::all();
        return view('umpan.index', compact('umpan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create()
    {
        return view('umpan.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'tanggal' => 'required',
            'pesan' => 'required',

        ]);

        $umpan = new UmpanBalik();
        $umpan->nama = $request->nama;
        $umpan->email = $request->email;
        $umpan->tanggal = $request->tanggal;
        $umpan->pesan = $request->pesan;
        $umpan->save();
        return redirect()->route('umpan.index')
            ->with('success', 'Data berhasil dibuat!');

    }
}
