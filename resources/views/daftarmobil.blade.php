@extends('layout/main')
@section('title', 'daftarmobil')
@section('css')
<link rel="stylesheet" type="text/css" href="/css/daftarmobil.css">
@endsection
@section('container')
<div class="container text-center" style="margin-top: 90px">
    @if(Auth::user()->role_user == 'Admin')
    <a href="/tambahmobil" class="btn btn-primary">
        tambahmobil
      </a>
      @endif
      <div class="row g-3">
        <div class="col-5">
            <form action="/daftarmobil" method="GET">
                @csrf
                <input type="search" name="search" class="form-control" placeholder="Search" aria-label="search">
            </form>
        </div>
      </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Merek</th>
            <th scope="col">Model</th>
            <th scope="col">Nomer Plat</th>
            <th scope="col">Tarif</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        @php $no = 1; @endphp
        @foreach($mobils as $mobil)
        <tbody class="table-group-divider">
          <tr>
            <th scope="row">{{$no++}}</th>
            <td>{{$mobil->nama_mobil}}</td>
            <td>{{$mobil->model_mobil}}</td>
            <td>{{$mobil->plat_mobil}}</td>
            <td>{{$mobil->tarif_sewa}}</td>
            <td>
                @if(Auth::user()->role_user == 'User')
                <a href="/peminjaman/{{$mobil->id}}" class="btn btn-primary">sewa</a>
                @else
                <a href="" class="btn btn-primary">edit</a>
                @endif
                {{$mobil->stock}}
            </td>
          </tr>
        </tbody>
        @endforeach
    </table>
      </div>
@endsection