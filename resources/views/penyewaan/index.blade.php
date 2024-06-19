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
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">no</th>
                            <th scope="col">Id penyewaan</th>
                            <th scope="col">Nama user</th>
                            <th scope="col">No Lapangan</th>
                            <th scope="col">Tipe Lapangan</th>
                            <th scope="col">harga Lapangan</th>
                            <th scope="col">Tanggal sewa</th>
                            <th scope="col">Total waktu</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataPenyewaan as $dt)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dt->id_penyewaan}}</td>
                                <td>{{ $dt->user_name }}</td>
                                <td>{{ $dt->no_lapangan }}</td>
                                <td>{{ $dt->tipe_lapangan }}</td>
                                <td>{{ $dt->harga_sewa }}</td>
                                <td>{{ $dt->tanggal_sewa }}</td>
                                <td>{{ $dt->total_waktu }}</td>
                                <td>
                                    <form action="{{ route('penyewaan/hapus-data',['id' => $dt->id_penyewaan]) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </x-app-layout>
@endsection
