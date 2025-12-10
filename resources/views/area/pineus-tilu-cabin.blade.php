@extends('layouts.app')

@section('title', 'Pineus Tilu Cabin')

@section('content')
    @include('partials.area.pt-cabin.header')
    @include('partials.area.pt-cabin.skema-deck')
    @include('partials.area.pt-cabin.harga-kapasitas')
    @include('partials.area.pt-cabin.fasilitas')
    @include('partials.area.pt-cabin.galeri')
    @include('partials.area.pt-cabin.reservasi-cta')
    @include('partials.area.pt-cabin.scripts')

@endsection
