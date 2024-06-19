@extends('layout-admin.admin')

@section('content')
    <x-app-layout>
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

        <x-slot name="header">
            <h2 class=" font-semibold text-xs text-gray-800 dark:text-gray-200 leading-tight">
                {{ __("You're logged in") }}
            </h2>
        </x-slot>

        <div class="flex flex-wrap gap-6">
            @foreach($dataTabel as $lapangan)
                <div class="card" style="width: 21rem;">
                    <td>
                        @if($lapangan->gambar)
                            <img src="{{ asset('images/lapangan/'.$lapangan->gambar) }}" alt="Gambar Lapangan">
                        @else
                            No image available
                        @endif
                        </td>
                    <div class="card-body">
                        <h5 class="card-title">Lapangan No {{ $lapangan->no_lapangan }}</h5>
                        <h1 class="card-text">Tipe {{ $lapangan->tipe_lapangan }}</h1>
                        <p class="card-text">Harga: Rp {{ number_format($lapangan->harga_sewa, 0, ',', '.') }}</p>
                        @if(auth()->user()->role == 'admin')
                            <a href="{{ route('lapangan/index') }}" class="btn btn-primary">Detail</a>
                        @endif
                        @if(auth()->user()->role == 'user_penyewa')
                            <a href="{{ route('penyewaan/tambah-data', $lapangan->id_lapangan) }}" class="btn btn-primary">Booking</a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </x-app-layout>
@endsection
