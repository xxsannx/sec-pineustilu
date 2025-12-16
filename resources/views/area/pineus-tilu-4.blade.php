@extends('layouts.app')

@section('title', 'Pineus Tilu 4')

@section('content')
    @include('partials.area.pt-4.header')
    @include('partials.area.pt-4.skema-deck')
    @include('partials.area.pt-4.harga-kapasitas')
    @include('partials.area.pt-4.promo-ramadhan')
    @include('partials.area.pt-4.fasilitas')
    @include('partials.area.pt-4.galeri')
    @include('partials.area.pt-4.reservasi-cta')
    @include('partials.area.pt-4.scripts')

@endsection
