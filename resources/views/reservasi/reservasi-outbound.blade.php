@extends('layouts.app')

@section('title', 'Reservasi Outbound - Pineus Tilu - Glamping & Outbound')

@section('content')
    <main class="pt-24 w-full max-w-screen-xl mx-auto px-6 pb-28 bg-[#f6fbf8]">
        @include('partials.reservasi-outbound.header')
        @include('partials.reservasi-outbound.styles')

        @include('partials.reservasi-outbound.detail')
        @include('partials.reservasi-outbound.modal-info')
        @include('partials.reservasi-outbound.form')
    </main>

    @push('scripts')
        @vite('resources/js/pages/reservasi-outbound.js')
    @endpush
@endsection