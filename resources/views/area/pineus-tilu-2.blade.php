@extends('layouts.app')

@section('title', 'Pineus Tilu 2 - Pineus Tilu - Glamping & Outbound')

@section('content')
   <section class="relative bg-gray-800 min-h-screen">
    <img src="{{ asset('images/area-galeri/pt-2/main.jpg') }}" alt="Pineus Tilu II"
        class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/35"></div>

    <div
        class="absolute left-0 w-full px-4 sm:px-6 md:px-8 lg:px-12 pointer-events-none text-center text-white top-20 md:top-24 lg:top-32"
        data-aos="fade-down" data-aos-duration="800">
        <h1
            class="mb-1 leading-tight tracking-wide text-3xl md:text-5xl lg:text-[64px] drop-shadow-md text-white font-normal">
            <span class="block" style="font-family: 'Bizon', 'Poppins', ui-sans-serif, system-ui; font-weight:400;">
                PINEUS TILU <span class="inline-block italic" style="font-weight:600; font-family: 'Poppins', ui-sans-serif, system-ui;">2</span>
            </span>
        </h1>

        <p class="italic text-sm md:text-base lg:text-lg mt-1 drop-shadow-sm"
            style="font-family: 'Poppins', ui-sans-serif, system-ui;">
            RestoreYourLife
        </p>
    </div>
</section>

    <div class="max-w-6xl mx-auto sm:px-6 md:px-8">
        @include('partials.area.pt-2.skema-deck')
        @include('partials.area.pt-2.harga-kapasitas')
        @include('partials.area.pt-2.promo-ramadhan')
        @include('partials.area.pt-2.fasilitas')
        @include('partials.area.pt-2.galeri')
        <x-reservation-cta/>
    </div>
    @push('scripts')
        <script src="{{ asset('js/area.js') }}" defer></script>
    @endpush
@endsection