@extends('layouts.app')

@section('title', 'Pedoman - Pineus Tilu - Glamping & Outbound')

@section('content')

    <main class="pt-24 w-full max-w-screen-xl mx-auto px-6 pb-28 bg-[#f6fbf8]">
        @include('partials.pedoman.header')

        @include('partials.pedoman.syarat-ketentuan')
        @include('partials.pedoman.divider')

        @include('partials.pedoman.kebijakan-informasi')
        @include('partials.pedoman.divider')

        @include('partials.pedoman.parkir')
        @include('partials.pedoman.divider')

        @include('partials.pedoman.asuransi')
        @include('partials.pedoman.divider')
    </main>
@endsection