<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Peminjaman;
use App\Models\Peminjaman_mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Mobil $mobil)
    {
        return view('peminjaman', compact('mobil'));
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
    public function store(Request $request, Mobil $mobil)
    {
        $mobils = $mobil->id;
        $request->validate([
            'tanggal_peminjaman' => 'date',
            'tanggal_pengembalian' => 'date|after:tanggal_peminjaman',
        ]);

        $tanggalSewa = $request->input('tanggal_sewa');
        $tanggalKembali = $request->input('tanggal_kembali');

        $overlapPeminjaman = Peminjaman_mobil::where('mobil_id', $mobils)
            ->where('status', 'sedang dipinjam')
            ->where(function ($query) use ($tanggalSewa, $tanggalKembali) {
                $query->whereBetween('tanggal_peminjaman', [$tanggalSewa, $tanggalKembali])
                    ->orWhereBetween('tanggal_pengembalian', [$tanggalSewa, $tanggalKembali]);
            })
            ->exists();

        if ($overlapPeminjaman) {
            return redirect()->back()->with('error', 'Peminjaman tidak dapat dilakukan karena tanggal sewa atau tanggal kembali tumpang tindih dengan peminjaman lain.');
        }
        if ($this->cekJangkaWaktu($request->input('tanggal_sewa'), $request->input('tanggal_kembali'))) {

            $tambah = new Peminjaman_mobil();
            $tambah->tanggal_peminjaman = $tanggalSewa;
            $tambah->tanggal_pengembalian = $tanggalKembali;
            $tambah->mobil_id = $request->mobil_id;
            $tambah->user_id = auth()->id();
            $tambah->status = 'sedang dipinjam';
            $tambah->save();

            $request->session()->flash('success', '<h5>berhasil menyewa!</h5>');

            return redirect('/profile');
        } else {
            $request->session()->flash('error', '<h5>Tanggal pengembalian harus setidaknya satu hari setelah tanggal peminjaman.</h5>');

            return redirect()->back();
        }
    }
    private function cekJangkaWaktu($tanggalSewa, $tanggalKembali)
    {
        $tanggalPeminjaman = \Carbon\Carbon::parse($tanggalSewa);
        $tanggalPengembalian = \Carbon\Carbon::parse($tanggalKembali);

        return $tanggalPeminjaman->addDays(1)->lte($tanggalPengembalian);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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
