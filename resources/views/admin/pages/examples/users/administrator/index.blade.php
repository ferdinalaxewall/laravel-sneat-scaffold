@extends('admin.layouts.master')
@section('title', 'Administrator')

@section('content')
{{-- Breadcrumb --}}
<x:breadcrumb.wrapper>
    <x:breadcrumb.item name="Dashboard" href="{{ route('example.dashboard') }}" />
    <x:breadcrumb.item name="Users" href="#" />
    <x:breadcrumb.item name="Administrator" href="javascript:void(0)" isActive="true" />
</x:breadcrumb.wrapper>

<!-- Tabel Administrator -->
<x:card.wrapper>

    <x:table.box-title title="Administrator">
        <x:button.linked :href="route('example.users.administrator.create')" tooltip="Tambah Administrator" iconClass="bx-plus-circle" variant="btn-primary" />
    </x:table.box-title>

    <x:card.body>
        <x:table.wrapper>
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
                            <x:button.linked :href="route('example.users.administrator.detail')" tooltip="Detail Administrator" iconClass="bx-info-circle" variant="btn-secondary" />
                            <x:button.linked :href="route('example.users.administrator.edit')" tooltip="Ubah Administrator" iconClass="bx-edit-alt" variant="btn-info" />
                            <x:button.linked :href="route('example.users.administrator.delete')" tooltip="Hapus Administrator" iconClass="bx-trash-alt" variant="btn-danger delete-confirm" />
                        </div>
                    </td>
                </tr>
            </tbody>
        </x:table.wrapper>
    </x:card.body>

</x:card.wrapper>

@endsection
