@extends('layouts.app')

@section('title', 'Reservasi Glamping - Pineus Tilu - Glamping & Outbound')

@section('content')
    <main class="pt-24 w-full max-w-screen-xl mx-auto px-6 pb-28 bg-[#f6fbf8]">
        <header class="text-center py-8">
            <h1 class="text-4xl md:text-5xl font-extrabold text-[#017249]">RESERVASI GLAMPING</h1>
        </header>
        @include('partials.reservasi-glamping.detail')
        @include('partials.reservasi-glamping.modal-info')
        @include('partials.reservasi-glamping.form')
    </main>

    @push('scripts')
        <script src="{{ asset('js/reservasi-glamping.js') }}" defer></script>
    @endpush
@endsection
