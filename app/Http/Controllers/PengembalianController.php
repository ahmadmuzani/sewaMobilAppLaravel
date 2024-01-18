<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;
use App\Models\Peminjaman;
use App\Models\Peminjaman_mobil;
use Illuminate\Support\Facades\Auth;


class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Peminjaman_mobil $pinjam)
    {
        return view('pengembalian', compact('pinjam'));
    }
    public function verifPlat(Request $request, Peminjaman_mobil $pinjam)
    {
        $plat = $pinjam->mobil_id;
        $mobil = Mobil::where('id', $plat)->first();
        $platMobil = $mobil->plat_mobil;
        if ($request->plat_mobil == $platMobil) {
            \DB::table('peminjaman_mobils')->where('mobil_id', $plat)->update([
                'status' => 'Sudah Dikembalikan',
            ]);
        } else {
            return back()->with('error', 'plat salah, mohon masukan dengan banarrrrr!');
        }
        return redirect('profile')->with('success', 'Pengembalian Sukses Jaya!');
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
        //
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
