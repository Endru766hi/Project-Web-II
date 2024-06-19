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
            <div class="card-body">
                <a href="{{ route('lapangan/tambah-data') }}" class="btn btn-primary mb-3">Tambah Lapangan</a>
                @if($dataLapangan->isEmpty())
                <div class="alert alert-warning" role="alert">
                    No data available.
                </div>
                @else
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No Lapangan</th>
                        <th scope="col">Tipe Lapangan</th>
                        <th scope="col">Harga Sewa</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dataLapangan as $dt)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dt->no_lapangan }}</td>
                        <td>{{ $dt->tipe_lapangan }}</td>
                        <td>{{ $dt->harga_sewa }}</td>

                        <td>
                        @if($dt->gambar)
                            <img src="{{ asset('images/lapangan/'.$dt->gambar) }}" alt="Gambar Lapangan" style="max-width: 100px; max-height: 100px;">
                        @else
                            No image available
                        @endif
                        </td>
                        <td>
                        <a href="{{ route('lapangan/edit-data', $dt->id_lapangan) }}" class="btn btn-warning btn-sm">Update</a>
                        <form action="{{ route('lapangan/hapus-data',['id' => $dt->id_lapangan]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </x-app-layout>
@endsection
