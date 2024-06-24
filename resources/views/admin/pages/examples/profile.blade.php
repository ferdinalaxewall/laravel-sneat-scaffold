@extends('admin.layouts.master')
@section('title', 'Profil Saya')

@section('content')
{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-3 mb-4">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Profil Saya</li>
    </ol>
</nav>

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="user-profile-header-banner">
                <img src="{{ asset('assets/admin/img/pages/profile-banner.png') }}" alt="Banner image" class="rounded-top w-100">
            </div>
            <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                    <img src="{{ auth()->user()?->getProfileImageURL() }}" onerror="this.src='{{ asset('assets/admin/img/avatars/1.png') }}'" alt="Avatar of {{ auth()->user()?->name }}" class="d-block h-100 ms-0 ms-sm-4 rounded user-profile-img bg-light shadow-sm" id="avatar-profile" style="aspect-ratio: 1/1; object-fit: cover; object-position: center;">
                </div>
                <div class="flex-grow-1 mt-3 mt-sm-5">
                    <div class="d-flex align-items-md- end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                        <div class="user-profile-info">
                            <h4>{{ auth()->user()?->name }}</h4>
                            <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                <li class="list-inline-item fw-medium" style="text-transform: capitalize;">
                                    <i class='bx bx-pen'></i> Administrator
                                </li>
                                <li class="list-inline-item fw-medium">
                                    <i class='bx bx-calendar-alt'></i> Terdaftar {{ auth()->user()?->created_at?->translatedFormat('d F Y') }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Form Administrator -->
<div class="card">
    <div class="d-flex align-items-center justify-content-between pe-4">
        <h5 class="card-header mb-0">Ubah Profil Saya</h5>
    </div>
    <div class="card-body pt-0">
        <form action="#" method="POST" class="row" enctype="multipart/form-data">
            @csrf
            <div class="col-12 mb-3">
                <label for="name" class="form-label required">Nama Lengkap</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ auth()->user()?->name }}" placeholder="Masukkan Nama Lengkap" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label required">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ auth()->user()?->email }}" placeholder="Masukkan Email" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="phone" class="form-label">No. HP</label>
                <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ auth()->user()?->phone }}" placeholder="Masukkan Nomor HP">
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group input-group-merge">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Masukkan Password">
                    <span class="input-group-text cursor-pointer see-password" data-target="#password">
                        <i class="bx bx-hide"></i>
                    </span>
                </div>
                <i class="d-block">
                    <small>*Kosongkan jika tidak ingin mengganti password</small>
                </i>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <div class="input-group input-group-merge">
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" placeholder="Konfirmasi Password">
                    <span class="input-group-text cursor-pointer see-password" data-target="#password_confirmation">
                        <i class="bx bx-hide"></i>
                    </span>
                </div>
                <i class="d-block">
                    <small>*Kosongkan jika tidak ingin mengganti password</small>
                </i>
                @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="image" class="form-label">Foto Profil</label>
                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" onchange="previewFile(this, 'avatar-profile')" accept="image/*">
                <i class="d-block">
                    <small>*Kosongkan jika tidak ingin mengganti foto profil</small>
                </i>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror" rows="5" placeholder="Masukkan Alamat">{{ auth()->user()?->address }}</textarea>
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center gap-2">
                    <i class="bx bx-save"></i> Simpan
                </button>
            </div>
        </form>
    </div>
</div>
<!-- End Form Administrator -->
@endsection