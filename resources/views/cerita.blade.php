@extends('layouts.app')

@section('title', 'Cerita - Pineus Tilu - Glamping & Outbound')

@section('content')
    <main class="pt-24 w-full max-w-screen-xl mx-auto px-6 pb-28 bg-[#f6fbf8]">
        @include('partials.cerita.header')

        <section class="w-full">
            @include('partials.cerita.language-switcher')

            <div class="cerita-grid" id="ceritaGrid" aria-live="polite">
                @include('partials.cerita.content-indonesian')
                @include('partials.cerita.content-japanese')
                @include('partials.cerita.content-english')
            </div>
        </section>
        @include('partials.cerita.credit')
    </main>

    @push('scripts')
        <script src="{{ asset('js/cerita.js') }}" defer></script>
    @endpush
@endsection