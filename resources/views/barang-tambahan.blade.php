@extends('layouts.app')

@section('title', 'Barang Tambahan - Pineus Tilu - Glamping & Outbound')

@section('content')

    <section class="py-12 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-extrabold text-center text-[#017249] mb-6 tracking-wider">
                ADDITIONAL ITEMS :
            </h2>
        </div>

        <div class="max-w-5xl mx-auto px-6">
            <div class="grid gap-8 md:grid-cols-2">
                @include('partials.barang-tambahan.perlengkapan-layanan')
                @include('partials.barang-tambahan.daging-saus')
            </div>
        </div>
    </section>
@endsection