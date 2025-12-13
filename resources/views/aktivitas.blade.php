@extends('layouts.app')

@section('title', 'Aktivitas Outdoor - Pineus Tilu - Glamping & Outbound')

@section('content')

<main class="pt-24 w-full max-w-screen-xl mx-auto px-6 pb-28 bg-[#f6fbf8]">
    @include('partials.aktivitas.header')
    @include('partials.aktivitas.divider')

    @include('partials.aktivitas.arung-jeram')
    @include('partials.aktivitas.divider')

    <!-- FLYING FOX + OFFROAD (side-by-side) -->
    <section class="w-full mb-8">
        <div class="max-w-screen-xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                @include('partials.aktivitas.flying-fox')
                @include('partials.aktivitas.offroad')
            </div>
        </div>
    </section>
    @include('partials.aktivitas.divider')

    <!-- FUN ATV + PAINTBALL (side-by-side) -->
    <section class="w-full mb-8">
        <div class="max-w-screen-xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                @include('partials.aktivitas.fun-atv')
                @include('partials.aktivitas.paintball')
            </div>
        </div>
    </section>
    @include('partials.aktivitas.divider')

    @include('partials.aktivitas.team-building')
    @include('partials.aktivitas.divider')

    @include('partials.aktivitas.activities-grid')
    @include('partials.aktivitas.divider')

    @include('partials.aktivitas.information')
    @include('partials.aktivitas.divider')
</main>
@endsection