@extends('layout-admin.admin')

@section('content')

    <x-app-layout>
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


            <div class="card-header">
                <h4 class="card-title">Tambah Lapangan</h4>
            </div>
        <div class="card-body">

                <form action="{{ route('lapangan/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="no_lapangan">No Lapangan</label>
                    <input type="text" class="form-control" id="no_lapangan" name="no_lapangan" required>
                </div>
                <div class="form-group">
                    <label for="tipe_lapangan">Tipe Lapangan</label>
                    <input type="text" class="form-control" id="tipe_lapangan" name="tipe_lapangan" required>
                </div>
                <div class="form-group">
                    <label for="harga_sewa">Harga Sewa</label>
                    <input type="text" class="form-control" id="harga_sewa" name="harga_sewa" required>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control-file" id="gambar" name="gambar" >
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                <div class="py-8 flex justify-end">
                    <a href="{{ route('lapangan/index') }}" class="ms-1">
                        <x-primary-button>
                            {{ __('Kembali  ') }}
                        </x-primary-button>
                    </a>
                </div>
        </div>
        </div>
    </x-app-layout>
@endsection
