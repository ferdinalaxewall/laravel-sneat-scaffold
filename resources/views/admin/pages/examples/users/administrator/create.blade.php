@extends('admin.layouts.master')
@section('title', 'Administrator')

@section('content')

{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-3 mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('example.dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('example.users.administrator.index') }}">Administrator</a>
        </li>
        <li class="breadcrumb-item active">
            Tambah Administrator
        </li>
    </ol>
</nav>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">Form Tambah Administrator</h5>
    </div>
    <div class="card-body">
        <form action="#" class="row" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-12 mb-3">
                <label for="name" class="form-label required">Nama Lengkap</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" placeholder="Masukkan Nama Lengkap" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="email" class="form-label required">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="Masukkan Email" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="password" class="form-label required">Password</label>
                <div class="input-group input-group-merge">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Masukkan Password" required>
                    <span class="input-group-text cursor-pointer see-password" data-target="#password">
                        <i class="bx bx-hide"></i>
                    </span>
                </div>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="password_confirmation" class="form-label required">Konfirmasi Password</label>
                <div class="input-group input-group-merge">
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" placeholder="Konfirmasi Password" required>
                    <span class="input-group-text cursor-pointer see-password" data-target="#password_confirmation">
                        <i class="bx bx-hide"></i>
                    </span>
                </div>
                @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="image" class="form-label">Foto Profil</label>
                <img src="#" onerror="this.src='{{ asset('assets/admin/img/skeleton/not-found-image.png') }}'" alt="Profil - {{ old('name') }}" class="preview-image" id="image-profile">
                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" onchange="previewFile(this, 'image-profile')" accept="image/*">
                <i class="d-block">
                    <small>*Kosongkan jika tidak ingin mengupload foto profil</small>
                </i>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">
                    <span class="tf-icons bx bx-plus me-1"></span> Tambahkan Administrator
                </button>
            </div>
        </form>
    </div>
</div>

@endsection