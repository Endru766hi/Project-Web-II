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
                <h4 class="card-title">Edit User</h4>
            </div>
            <div class="card-body" style="max-height: 500px overflow-y: auto">

                <form action="{{ route('user/update',$dataUser->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $dataUser->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $dataUser->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $dataUser->alamat }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nomor_hp">No_Hp</label>
                        <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" value="{{ $dataUser->nomor_hp }}" required>
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" id="role" name="role">
                            <option value="admin" {{ $dataUser->role === 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="user_penyewa" {{ $dataUser->role === 'user_penyewa' ? 'selected' : '' }}>User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                <div class="py-8 flex justify-end">
                    <a href="{{ route('user/index-user') }}" class="ms-1">
                        <x-primary-button>
                            {{ __('Kembali') }}
                        </x-primary-button>
                    </a>
                </div>
            </div>
        </div>
    </x-app-layout>
@endsection
