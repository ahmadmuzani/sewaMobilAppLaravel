@extends('layout/main')
@section('title', 'pengembalian')
@section('css')
<link rel="stylesheet" type="text/css" href="/css/index.css">
@endsection
@section('container')
<div class="container text-center" style="margin-top: 90px">
    <h1>Kembalikan</h1>
    <form action="" method="POST">
        @csrf
  
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">tanggal peminjaman</label>
            <div class="col-sm-10">
                <input 
                      type="text"
                      name="nama_mobil" class=" form-control @error('nama_mobil') is-invalid @enderror"
                      id="nama_mobil"
                      readonly
                      value="{{$pinjam->tanggal_peminjaman}}"
                      >
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">tanggal pengembalian</label>
            <div class="col-sm-10">
                <input 
                type="text"
                name="nama_mobil" class=" form-control @error('nama_mobil') is-invalid @enderror"
                id="nama_mobil"
                readonly
                value="{{$pinjam->tanggal_pengembalian}}"
                >
               </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Plat Mobil yang dipinjam</label>
            <div class="col-sm-10">
                <input 
                type="text"
                name="plat_mobil" class=" form-control @error('plat_mobil') is-invalid @enderror"
                id="plat_mobil"
                >  
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Kembalikan</button>
        </form>
  </div>
@endsection