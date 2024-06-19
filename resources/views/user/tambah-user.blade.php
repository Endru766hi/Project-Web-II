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


            <div class="card-header" >
                <h4 class="card-title">Tambah User</h4>
            </div>
            <div class="card-body" style="max-height: 420px; overflow-y: auto">

                <form action="{{ route('user/store-user') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Password</label>
                        <input type="text" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="nomor_hp">No_Hp</label>
                        <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" required>
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" id="role" name="role">
                            <option value="admin">Admin</option>
                            <option value="user_penyewa">User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                <div class="py-8 flex justify-end">
                    <a href="{{ route('user/index-user') }}" class="ms-1">
                        <x-primary-button>
                            {{ __('Kembali  ') }}
                        </x-primary-button>
                    </a>
                </div>
            </div>
        </div>
    </x-app-layout>
@endsection
