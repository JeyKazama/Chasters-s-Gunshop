<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'nim'=>'required|unique:mahasiswas',
            'email'=>'required|email|unique:mahasiswas',
            'jurusan'=>'required',
        ]);

        Mahasiswa::create($request->all());
        return redirect()->route(mahasiswa.index)->with('Success', 'Mahasiswa berhasil ditambah');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nama'=>'required',
            'nim'=>'required|unique:mahasiswas,nim,'.$mahasiswa->id,
            'email'=>'required|email|unique:mahasiswas,email,'.$mahasiswa->id,
            'jurusan'=>'required'
        ]);

        $mahasiswa->update($request->all());
        return redirect()->route ('mahasiswa.index')->with ('Success', 'Mahasiswa berhasil diperbaharui');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route ('mahasiswa.index')->with ('Success', 'Mahasiswa berhasil dihapus');
    }
}
