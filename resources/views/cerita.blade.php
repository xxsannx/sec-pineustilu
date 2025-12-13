@extends('layouts.app')

@section('title', 'Cerita - Pineus Tilu - Glamping & Outbound')

@section('content')

    <main class="pt-24 w-full max-w-screen-xl mx-auto px-6 pb-28">
        {{-- Header --}}
        <header class="text-center py-10" data-aos="fade-down" data-aos-duration="800">
            <h1 id="storyHeader" class="text-4xl md:text-5xl font-extrabold text-brand-primary tracking-wider" lang="id"
                style="font-family: 'Bizon', sans-serif;">
                CERITA
            </h1>
        </header>

        {{-- Content Section --}}
        <section class="w-full" role="main">
            {{-- Language Switcher --}}
            <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                @include('partials.cerita.language-switcher')
            </div>

            {{-- Story Content Grid --}}
            <div id="ceritaGrid" aria-live="polite" class="space-y-6">
                @include('partials.cerita.content-indonesian')
                @include('partials.cerita.content-japanese')
                @include('partials.cerita.content-english')
            </div>
        </section>

        {{-- Credit Section --}}
        <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            @include('partials.cerita.credit')
        </div>
    </main>
@endsection

@push('scripts')
    <script src="{{ asset('js/cerita.js') }}"></script>
@endpush
