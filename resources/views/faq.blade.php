@extends('layouts.app')

@section('title', 'Frequently Asked Questions - Pineus Tilu - Glamping & Outbound')

@section('content')
    <main class="pt-24 w-full max-w-screen-xl mx-auto px-6 pb-28 bg-[#f6fbf8]">
        @include('partials.faq.header')

        <div class="max-w-4xl mx-auto">
            @include('partials.faq.search-bar')
            @include('partials.faq.faq-items')
        </div>
    </main>

    @push('scripts')
        @vite('resources/js/pages/faq.js')
    @endpush
@endsection