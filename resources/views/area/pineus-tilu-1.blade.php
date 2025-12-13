@extends('layouts.app')

@section('title', 'Pineus Tilu 1 - Pineus Tilu - Glamping & Outbound')

@section('content')
    <!-- Header: dipindahkan dari partials.area.pt-1.header -->
    <section class="relative bg-gray-800 min-h-screen">
        <!-- Background image PT1.webp -->
        <img src="{{ asset('images/area-galeri/pt-1/PT1.webp') }}" alt="Pineus Tilu I"
            class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/35"></div>

        <!-- Blok teks diposisikan absolut di tengah-atas -->
        <div class="absolute w-full text-white text-center" style="
                    top: clamp(72px, 10vh, 120px);
                    left: 0;
                    padding: 0 clamp(16px, 6vw, 120px);
                    pointer-events: none;
                ">
            <h1 class="mb-1 leading-tight font-bold tracking-wide" style="
                        font-size: clamp(28px, 5vw, 64px);
                        text-shadow: 1px 1px 2px rgba(0,0,0,0.35);
                        font-weight: 400;
                        letter-spacing: 0;
                        text-rendering: optimizeLegibility;
                        -webkit-font-smoothing: antialiased;
                        -moz-osx-font-smoothing: grayscale;
                    ">
                <span style="font-family: 'Bizon', 'Poppins', ui-sans-serif, system-ui; font-weight: 400;">PINEUS
                    TILU</span>
                <span class="italic"
                    style="font-family: 'Poppins', ui-sans-serif, system-ui; font-style: italic; font-weight: 600;">1</span>
            </h1>
            <p class="italic" style="
                        font-family: 'Poppins', ui-sans-serif, system-ui; font-style: italic;
                        font-size: clamp(14px, 2.2vw, 22px);
                        text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
                        margin-top: 4px;
                    ">
                RestoreYourLife
            </p>
        </div>
    </section>

    {{-- Hapus include header --}}
    {{-- @include('partials.area.pt-1.header') --}}

    @include('partials.area.pt-1.skema-deck')
    @include('partials.area.pt-1.harga-kapasitas')
    @include('partials.area.pt-1.promo-ramadhan')
    @include('partials.area.pt-1.fasilitas')
    @include('partials.area.pt-1.galeri')
    @include('partials.area.pt-1.reservasi-cta')
    @push('scripts')
        @vite('resources/js/pages/area.js')
    @endpush
@endsection