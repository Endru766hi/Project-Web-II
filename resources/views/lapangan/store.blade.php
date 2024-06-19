@extends('layout-admin.admin')

@section('content')
    <x-app-layout>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Lapangan</h4>
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
                    <input type="file" class="form-control-file" id="gambar" name="gambar">
                </div>
            </div>
        </div>
    </x-app-layout>
@endsection
