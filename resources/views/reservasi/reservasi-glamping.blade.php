@extends('layouts.app')

@section('title', 'Reservasi Glamping - Pineus Tilu - Glamping & Outbound')

@section('content')
    @include('layouts.navbar')

    <main class="pt-24 w-full max-w-screen-xl mx-auto px-6 pb-28 bg-[#f6fbf8]">
        @include('partials.reservasi-glamping.header')
        @include('partials.reservasi-glamping.styles')

        @include('partials.reservasi-glamping.detail')
        @include('partials.reservasi-glamping.modal-info')
        @include('partials.reservasi-glamping.form')
    </main>

    @include('partials.reservasi-glamping.scripts')
@endsection