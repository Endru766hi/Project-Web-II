@extends('layout-admin.admin')

@section('content')

<div class="card">
    {{-- Pesan Sesi --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
  <div class="card-body">
    Selamat Datang
  </div>
</div>

@endsection
