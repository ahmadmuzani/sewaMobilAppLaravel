@extends('layout/main')
@section('title', 'pinjam')
@section('css')
<link rel="stylesheet" type="text/css" href="/css/index.css">
@endsection
@section('container')
<div class="container text-center" style="margin-top: 90px">
    <h1>pinjam</h1>
    <form action="" method="POST">
        @csrf
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Mobil </label>
            <div class="col-sm-10">
              <input 
                      type="text"
                      name="nama_mobil" class=" form-control @error('nama_mobil') is-invalid @enderror"
                      id="nama_mobil"
                      readonly
                      value="{{$mobil->nama_mobil}}"
                      >
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Model Mobil</label>
            <div class="col-sm-10">
              <input 
              type="text"
              name="model_mobil" class=" form-control @error('model_mobil') is-invalid @enderror"
              id="model_mobil"
              readonly
              value="{{$mobil->model_mobil}}"
              >      </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Plat Mobil</label>
            <div class="col-sm-10">
              <input 
              type="text"
              name="plat_mobil" class=" form-control @error('plat_mobil') is-invalid @enderror"
              id="plat_mobil"
              readonly
              value="{{$mobil->plat_mobil}}"
              >      </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Tarif Mobil</label>
            <div class="col-sm-10">
              <input 
              type="number"
              name="tarif_sewa" class=" form-control @error('tarif_sewa') is-invalid @enderror"
              id="tarif_sewa"
              readonly
              value="{{$mobil->tarif_sewa}}"
              >      </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">pilih tanggal peminjaman</label>
            <div class="col-sm-10">
              <input 
              type="date"
              name="tanggal_sewa" class=" form-control @error('tanggal_sewa') is-invalid @enderror"
              id="tanggal_sewa" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" 
              required
              >      </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">pilih tanggal pengembalian</label>
            <div class="col-sm-10">
              <input 
              type="date"
              name="tanggal_kembali" class=" form-control @error('tanggal_kembali') is-invalid @enderror"
              id="tanggal_kembali" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" 
              required
              >      </div>
          </div>
          <div class="row mb-3" style="display: none">
            <label for="inputPassword3" class="col-sm-2 col-form-label">id</label>
            <div class="col-sm-10">
              <input 
              type="text"
              name="mobil_id" class=" form-control @error('tanggal_kembali') is-invalid @enderror"
              id="tanggal_kembali"
              required value="{{$mobil->id}}"
              >      </div>
          </div>
      
          <button type="submit" class="btn btn-primary">Sewa</button>
        </form>
  </div>
@endsection