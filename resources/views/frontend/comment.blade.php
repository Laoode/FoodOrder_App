@extends('app')

@section('banner')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Ulasan</h1>
    </div>
</div>
@endsection

@section('content')
<div class="container">
<div class="card">
    <div class="card-header">
      <a href="{{ url()->previous() }}"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="d-flex m-2">
        <input type="text" placeholder="Masukkan Komentar / Ulasan Anda" style="width: 100%">
        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i></button>
    </div>
  </div>
</div>
@endsection