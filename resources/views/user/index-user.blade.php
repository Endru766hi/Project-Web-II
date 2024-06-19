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
                <a href="{{ route('user/tambah-user') }}" class="btn btn-primary mb-3">Tambah User</a>
                @if($dataUser->isEmpty())
                <div class="alert alert-warning" role="alert">
                    No data available.
                </div>
                @else
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Role</th> <!-- Tambah kolom Role -->
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($dataUser as $dtu)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dtu->name }}</td>
                                <td>{{ $dtu->email }}</td>
                                <td>{{ $dtu->nomor_hp }}</td>
                                <td>{{ $dtu->alamat }}</td>
                                <td>{{ $dtu->role }}</td> <!-- Menampilkan peran (role) -->
                                <td>
                                    <a href="{{ route('user/edit-user', $dtu->id) }}" class="btn btn-warning btn-sm">Update</a>
                                    <form action="{{ route('user/hapus-user',['id' => $dtu->id]) }}" method="POST" style="display:inline;">
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
