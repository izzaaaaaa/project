<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tampil()
    {
        $santri = Santri::get();
        
        return view('Santri.tampil', compact('santri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah()
    {
        return view('Santri.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function submit(Request $request)
    {
        $santri = new Santri();
        $santri-> nama = $request-> nama;
        $santri-> alamat = $request-> alamat;
        $santri-> no_hp = $request-> no_hp;
        $santri-> jenis_kelamin = $request-> jenis_kelamin;
        $santri-> asal_ponpes = $request-> asal_ponpes;
        $santri->save();

        return redirect()->route('Santri.tampil');
    }

    
    public function edit(string $id)
    {
        $santri = Santri::find($id);
        return view('Santri.edit', compact('santri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $santri = Santri::find($id);
        $santri-> nama = $request-> nama;
        $santri-> alamat = $request-> alamat;
        $santri-> no_hp = $request-> no_hp;
        $santri-> jenis_kelamin = $request-> jenis_kelamin;
        $santri-> asal_ponpes = $request-> asal_ponpes;
        $santri->update();

        return redirect()->route('Santri.tampil');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $santri = Santri::find($id);
        $santri->delete();
        return redirect()->route('Santri.tampil');
    }
}
