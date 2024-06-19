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
                <h4 class="card-title">Edit Penyewaan</h4>
            </div>
            <div class="card-body">

                <form action="{{ route('jenis/update',$dataPenyewaan->id_jenis_penyewaan) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nama_jenis">nama_jenis</label>
                        <input type="text" class="form-control" id="nama_jenis" name="nama_jenis" value="{{ $dataPenyewaan->nama_jenis }}" required>
                    </div>
                    <div class="form-group">
                        <label for="harga_sewa">Harga sewa</label>
                        <input type="text" class="form-control" id="harga_sewa" name="harga_sewa" value="{{ $dataPenyewaan->harga_sewa }}" required>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar" >
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                <div class="py-8 flex justify-end">
                    <a href="{{ route('jenis/index-jp') }}" class="ms-1">
                        <x-primary-button>
                            {{ __('Kembali  ') }}
                        </x-primary-button>
                    </a>
                </div>
            </div>
        </div>
    </x-app-layout>
@endsection
