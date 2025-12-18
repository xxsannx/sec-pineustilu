@extends('layouts.app')

@section('title', 'Barang Tambahan - Pineus Tilu - Glamping & Outbound')

@section('content')
    <section class="mt-20 py-12 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <h1 id="page-title"
                class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-center text-[#017249] mb-12 tracking-wide"
                style="font-family: 'Bizon', sans-serif;" data-aos="fade-down" data-aos-duration="800">
                ADDITIONAL ITEMS
            </h1>
        </div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <div class="grid gap-6 md:gap-8 md:grid-cols-2 items-start">
                @include('partials.barang-tambahan.perlengkapan-layanan')
                @include('partials.barang-tambahan.daging-saus')
            </div>
        </div>
    </section>
@endsection
