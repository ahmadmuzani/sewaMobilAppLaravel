<?php

namespace App\Http\Controllers;

use App\Models\Mobil;

use Illuminate\Http\Request;

class TambahmobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('tambahmobil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mobil' => ['required', 'max:255'],
            'plat_mobil' => ['required', 'min:4', 'max:255', 'unique:mobils'],
            'model_mobil' => ['required'],
            'tarif_sewa' => ['required'],
        ]);
        $tambah = new Mobil();
        $tambah->nama_mobil = $request->nama_mobil;
        $tambah->plat_mobil = $request->plat_mobil;
        $tambah->model_mobil = $request->model_mobil;
        $tambah->tarif_sewa = $request->tarif_sewa;
        $tambah->stock = 'tersedia';
        $tambah->save();
        $request->session()->flash('success', '<h5>data mobil berhasil ditambah!</h5>');

        return redirect('/daftarmobil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
