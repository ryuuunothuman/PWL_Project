<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'pages' => 'Anggota'
        ];
        $anggota = Anggota::all();
        return view('anggota.index', compact('anggota', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'pages' => 'Anggota'
        ];
        return view('anggota.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' =>  'required',
            'no_kk' =>  'required',
            'no_telp' => 'required',
        ]);

        Anggota::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_kk' => $request->no_kk,
            'no_telp' => $request->no_telp,
        ]);

        return redirect('/anggota')->with('success', 'Data Anggota Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show($anggota_id)
    {
        $data = [
            'pages' => 'Anggota'
        ];
        $anggota = Anggota::find($anggota_id);
        return view('anggota.show', compact('anggota', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($anggota_id)
    {
        $data = [
            'pages' => 'Anggota'
        ];
        $anggota=Anggota::find($anggota_id);
        return view('anggota.edit', compact('anggota', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $anggota_id)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' =>  'required',
            'no_kk' =>  'required',
            'no_telp' => 'required',
        ]);
        $anggota = Anggota::find($anggota_id);

        $anggota->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_kk' => $request->no_kk,
            'no_telp' => $request->no_telp,
        ]);

        return redirect('/anggota')->with('success', 'Data Anggota Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($anggota_id)
    {
        $anggota = Anggota::find($anggota_id);
        $anggota->delete();

        return redirect('/anggota')->with('success', 'Data Anggota Berhasil Dihapus');
    }
}
