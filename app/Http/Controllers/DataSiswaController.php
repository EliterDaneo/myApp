<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Data Siswa";
        $name = "Laravel 10 dan Bootstrap v5";
        $DataSiwas = DataSiswa::latest()->paginate(5);
        return view('datasiswa.index', compact('DataSiwas', 'title', 'name'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create a new resource";
        return view('datasiswa.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:5',
            'foto' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'kelas' => 'required',
            'alamat' => 'required|min:5',
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('public/fotosiswa', $foto->hashName());

        DataSiswa::create([
            'nama'      => $request->nama,
            'foto'      => $foto->hashName(),
            'kelas'     => $request->kelas,
            'alamat'    => $request->alamat
        ]);

        return redirect()->route('DataSiswa.index')
            ->with('success', 'Data Siswa Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
