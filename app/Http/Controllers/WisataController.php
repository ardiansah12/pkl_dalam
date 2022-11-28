<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisata = Wisata::all();
        return view('wisata.index', compact('wisata'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wisata.create');

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
            'galeri' => 'required',
            'nama_wisata' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',

        ]);

        $wisata = new wisata();
        if ($request->hasFile('galeri')) {
            $image = $request->file('galeri');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/wisata/', $name);
            $wisata->galeri = $name;
        }

        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->lokasi = $request->lokasi;
        $wisata->save();
        return redirect()->route('wisata.index')
            ->with('success', 'Data berhasil dibuat!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('wisata.show', compact('wisata'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('wisata.edit', compact('wisata'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $validated = $request->validate([
            'galeri' => 'required',
            'nama_wisata' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',

        ]);

        $wisata = Wisata::findOrFail($id);
        if ($request->hasFile('galeri')) {
            $wisata->deleteImage(); //menghapus galeri sebelum di update melalui method deleteImage di model
            $image = $request->file('galeri');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/wisata/', $name);
            $wisata->galeri = $name;
        }
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->lokasi = $request->lokasi;
        $wisata->save();
        return redirect()->route('wisata.index')
            ->with('success', 'Data berhasil diedit!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = Wisata::findOrFail($id);
        $wisata->delete();
        return redirect()->route('wisata.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}
