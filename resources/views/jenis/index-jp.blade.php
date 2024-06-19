@extends('layout-admin.admin')

@section('content')
    <x-app-layout>
        <div class="card" style="max-height: 500px; overflow-y: auto;">
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
                <a href="{{ route('jenis/tambah-jp') }}" class="btn btn-primary mb-3">Tambah Lapangan</a>
                @if($dataPenyewaan->isEmpty())
                    <div class="alert alert-warning" role="alert">
                        No data available.
                    </div>
                @else
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">nama jenis penyewaan</th>
                                <th scope="col">harga sewa</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataPenyewaan as $dtp)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $dtp->nama_jenis }}</td>
                                    <td>{{ $dtp->harga_sewa }}</td>
                                    <td>
                                        @if($dtp->gambar)
                                            <img src="{{ asset('images/lapangan/'.$dtp->gambar) }}" alt="Gambar jenis penyewaan" style="max-width: 100px; max-height: 100px;">
                                        @else
                                            No image available
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('jenis/edit-jp', $dtp->id_jenis_penyewaan) }}" class="btn btn-warning btn-sm">Update</a>
                                        <form action="{{ route('jenis/hapus-jp',['id' => $dtp->id_jenis_penyewaan]) }}" method="POST" style="display:inline;">
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
