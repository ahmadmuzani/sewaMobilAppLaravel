@extends('layout/main')
@section('title', 'tambah mobil')
@section('css')
<link rel="stylesheet" type="text/css" href="/css/tambahmobil.css">
@endsection
@section('container')
<div class="container" style="margin-top: 90px">
  
<h2>tambahmobil</h2>
<form action="/tambahmobil" method="POST">
  @csrf
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Mobil</label>
      <div class="col-sm-10">
        <input 
                type="text"
                name="nama_mobil" class=" form-control @error('nama_mobil') is-invalid @enderror"
                id="nama_mobil"
                required
                value="{{old('nama_mobil')}}"
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
        required
        value="{{old('model_mobil')}}"
        >      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Plat Mobil</label>
      <div class="col-sm-10">
        <input 
        type="text"
        name="plat_mobil" class=" form-control @error('plat_mobil') is-invalid @enderror"
        id="plat_mobil"
        required
        value="{{old('plat_mobil')}}"
        >      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Tarif Mobil</label>
      <div class="col-sm-10">
        <input 
        type="number"
        name="tarif_sewa" class=" form-control @error('tarif_sewa') is-invalid @enderror"
        id="tarif_sewa"
        required
        value="{{old('tarif_sewa')}}"
        >      </div>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</div>
@endsection