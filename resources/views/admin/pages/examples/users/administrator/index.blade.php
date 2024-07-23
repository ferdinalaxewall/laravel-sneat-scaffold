@extends('admin.layouts.master')
@section('title', 'Administrator')

@section('content')
{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-3 mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('example.dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Administrator</li>
    </ol>
</nav>


<!-- Tabel Administrator -->
<div class="card">
    <div class="d-flex align-items-center justify-content-between pe-4  ">
        <h5 class="card-header mb-0">Administrator</h5>
        <div class="d-flex align-items-center gap-2">
            <a href="{{ route('example.users.administrator.create') }}" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Tambah Administrator">
                <i class="bx bx-plus-circle"></i>
            </a>
        </div>
    </div>
    <div class="card-body pt-1">
        <div class="table-responsive text-nowrap">
            <table class="table table-hover simple-dataTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Tanggal Dibuat</th>
                        <th class="text-center">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>#</td>
                        <td>Super Administrator</td>
                        <td>admin@google.com</td>
                        <td>{{ now()->translatedFormat('d F Y H:i:s') }}</td>
                        <td>
                            <div class="d-flex flex-wrap align-items-center justify-content-center gap-2">
                                <a href="{{ route('example.users.administrator.detail') }}" class="btn btn-secondary btn-icon btn-sm" data-type="modal" data-modal-title="Detail Administrator" data-size-modal="md" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Detail Administrator">
                                    <i class="bx bx-info-circle"></i>
                                </a>
                                <a href="{{ route('example.users.administrator.edit') }}" class="btn btn-info btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Ubah Administrator">
                                    <i class="bx bx-edit-alt"></i>
                                </a>
                                <a href="{{ route('example.users.administrator.delete') }}" class="btn btn-danger btn-icon btn-sm delete-confirm" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Hapus Administrator">
                                    <i class="bx bx-trash-alt"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End Tabel Administrator -->

@endsection