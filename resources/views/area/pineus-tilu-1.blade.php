@extends('layouts.app')

@section('title', 'Pineus Tilu 1 - Pineus Tilu - Glamping & Outbound')

@section('content')
    @include('partials.area.pt-1.header')
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