@extends('layout/main')
@section('title', 'home')
@section('css')
<link rel="stylesheet" type="text/css" href="/css/index.css">
@endsection
@section('container')
<div class="container text-center">
    <div class="row align-items-center wrapper-hero">
      <div class="col-6">
        <img class="image-hero" src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?q=80&w=1966&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="car">
      </div>
      <div class="col-6">
        <h1>Selamat datang diwebsite sewa mobil</h1>
      </div>
    </div>
  </div>
@endsection