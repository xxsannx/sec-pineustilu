@extends('layouts.app')

@section('title', 'Pedoman - Pineus Tilu - Glamping & Outbound')

@section('content')
    <main class="min-h-screen pt-30 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-8">
                @include('partials.pedoman.syarat-ketentuan')
                @include('partials.pedoman.divider')

                @include('partials.pedoman.kebijakan-informasi')
                <x-reschedule-cancellation-cta/>
                @include('partials.pedoman.divider')

                @include('partials.pedoman.parkir')
                @include('partials.pedoman.divider')

                @include('partials.pedoman.asuransi')
            </div>
        </div>
    </main>
@endsection
