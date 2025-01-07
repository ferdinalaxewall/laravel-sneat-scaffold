@extends('admin.layouts.master')
@section('title', 'Administrator')

@section('content')

<x:breadcrumb.wrapper>
    <x:breadcrumb.item name="Dashboard" href="{{ route('example.dashboard') }}" />
    <x:breadcrumb.item name="Administrator" href="{{ route('example.users.administrator.index') }}" />
    <x:breadcrumb.item name="Edit Administrator" href="javascript:void(0)" isActive="true" />
</x:breadcrumb.wrapper>

<x:card.wrapper>
    <x:card.header title="Form Edit Administrator" />
    <x:card.body>
        <x:form.wrapper actionUrl="{{ $form['action'] }}" :editable="$form['editable']">
            <x:grid.row>
                <x:grid.col cols="12" resolution="md">
                    <x:form.label name="Nama Lengkap" for="name" required="true" />
                    <x:form.input type="text" name="name" placeholder="Masukkan Nama Lengkap" required="true" />
                </x:grid.col>
                <x:grid.col cols="12" resolution="md">
                    <x:form.label name="Alamat Email" for="email" required="true" />
                    <x:form.input type="email" name="email" placeholder="Masukkan Alamat Email" required="true" />
                </x:grid.col>
                <x:grid.col cols="6" resolution="md">
                    <x:form.label name="Kata Sandi" for="password" required="true" />
                    <div class="input-group input-group-merge">
                        <x:form.input type="password" name="password" placeholder="Masukkan Kata Sandi" required="true" />
                    </div>
                </x:grid.col>
                <x:grid.col cols="6" resolution="md">
                    <x:form.label name="Konfirmasi Kata Sandi" for="password_confirmation" required="true" />
                    <div class="input-group input-group-merge">
                        <x:form.input type="password" name="password_confirmation" placeholder="Masukkan Konfirmasi Kata Sandi" required="true" />
                    </div>
                </x:grid.col>
                <x:grid.col cols="12" resolution="md">
                    <x:form.label name="Foto Profil" for="profile_picture" required="true" />
                    <img src="#" onerror="this.src='{{ asset('assets/admin/img/skeleton/not-found-image.png') }}'" alt="Profil - {{ old('name') }}" class="preview-image" id="image-profile">
                    <x:form.input type="file" name="profile_picture" required="true" onchange="previewFile(this, 'image-profile')" accept="image/*" />
                </x:grid.col>
                <x:grid.col cols="12" resolution="md">
                    <button type="submit" class="btn btn-primary w-100">
                        <span class="tf-icons bx bx-plus me-1"></span> Tambahkan Administrator
                    </button>
                </x:grid.col>
            </x:grid.row>
        </x:form.wrapper>
    </x:card.body>
</x:card.wrapper>

@endsection
