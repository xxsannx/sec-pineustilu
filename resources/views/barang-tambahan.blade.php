@extends('layouts.app')

@section('title', 'Barang Tambahan - Pineus Tilu - Glamping & Outbound')

@section('content')
    @include('layouts.navbar')

    <section class="py-12 bg-white">
        @include('partials.barang-tambahan.header')

        <div class="max-w-5xl mx-auto px-6">
            <div class="grid gap-8 md:grid-cols-2">
                @include('partials.barang-tambahan.perlengkapan-layanan')
                @include('partials.barang-tambahan.daging-saus')
            </div>
        </div>
    </section>
@endsection