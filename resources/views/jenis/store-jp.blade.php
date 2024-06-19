@extends('layout-admin.admin')

@section('content')
    <x-app-layout>
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Penyewaan</h4>
                <form action="{{ route('jenis/store-jp') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama_jenis">nama_jenis</label>
                    <input type="text" class="form-control" id="nama_jenis" name="nama_jenis" required>
                </div>
                <div class="form-group">
                    <label for="harga_sewa">harga sewa</label>
                    <input type="text" class="form-control" id="harga_sewa" name="harga_sewa" required>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control-file" id="gambar" name="gambar">
                </div>
                </form>
            </div>
        </div>
    </x-app-layout>
@endsection
