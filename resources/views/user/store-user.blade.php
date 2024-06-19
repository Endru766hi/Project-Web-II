@extends('layout-admin.admin')

@section('content')
<x-app-layout>
        <div class="card">
            <div class="card-body" style="max-height: 420px overflow-y: auto">
        <div class="card-body" >
                <h4 class="card-title">Tambah User</h4>
                <form action="{{ route('user/store-user') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                </form>
            </div>
        </div>
    </x-app-layout>
@endsection
