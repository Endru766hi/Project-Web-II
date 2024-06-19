@extends('layout-admin.admin')

@section('content')
    <x-app-layout>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Penyewaan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('penyewaan/store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id">Nama User</label>
                        <input type="text" class="form-control" id="id" value="{{ auth()->user()->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="no_lapangan">No Lapangan</label>
                        <input type="text" class="form-control" id="no_lapangan" name="no_lapangan" value="{{ $dataLapangan->no_lapangan }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="harga_sewa">Harga Sewa</label>
                        <input type="text" class="form-control" id="harga_sewa" name="harga_sewa" value="{{ $dataLapangan->harga_sewa }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tipe_lapangan">Tipe Lapangan</label>
                        <input type="text" class="form-control" id="tipe_lapangan" name="tipe_lapangan" value="{{ $dataLapangan->tipe_lapangan }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_sewa">Tanggal Sewa</label>
                        <input type="date" class="form-control" id="tanggal_sewa" name="tanggal_sewa" required>
                    </div>
                    <div class="form-group">
                        <label for="total_waktu">Total Waktu (jam)</label>
                        <input type="number" class="form-control" id="total_waktu" name="total_waktu" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Booking</button>
                </form>
                <div class="py-8 flex justify-end">
                    <a href="{{ route('dashboard') }}" class="ms-1">
                        <x-primary-button>
                            {{ __('Kembali') }}
                        </x-primary-button>
                    </a>
                </div>
            </div>
        </div>
    </x-app-layout>
@endsection
