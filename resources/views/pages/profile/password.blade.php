@extends('layouts.app')

@section('title')
    Ubah Password
@endsection

@push('prepend-style')
@endpush
@push('addon-style')
@endpush


@section('content')
    <x-navigation-route title="Ubah Kata Sandi" backRoute="{{ route('profil') }}" textColor="text-custom-gray-10" :showBackground="true" />

    <form action="{{ route('update.password') }}" method="POST" class="relative flex flex-col px-5">
        @csrf
        @method('PUT')
        <div class="flex flex-col gap-4 bg-custom-gray-10 p-3 rounded-2xl border border-custom-gray-40">
            <x-input-fieldv2 label="Kata Sandi Lama" name="current_password" type="password" placeholder="Masukkan Kata Sandi Lama"
                icon="assets/images/icons/lock-primary.png" required />

            <x-input-fieldv2 label="Kata Sandi Baru" name="password" type="password" placeholder="Masukkan Kata Sandi Baru"
                icon="assets/images/icons/lock-primary.png" required />

            <x-input-fieldv2 label="Konfirmasi Sandi Baru" name="password_confirmation" type="password"
                placeholder="Masukkan Konfirmasi Kata Sandi Baru" icon="assets/images/icons/lock-primary.png" required />

            <x-button-primary type="submit" class="w-full mt-2">
                Simpan Perubahan
            </x-button-primary>
        </div>
    </form>
    @include('includes.footer')
@endsection

@push('addon-script')
@endpush
