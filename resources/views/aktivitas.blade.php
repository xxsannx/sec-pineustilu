@extends('layouts.app')

@section('title', 'Aktivitas Outdoor - Pineus Tilu - Glamping & Outbound')

@section('content')

    <main class="pt-24 w-full max-w-screen-xl mx-auto px-6 pb-28">
        <header class="text-center py-10">
            <h1 class="text-4xl md:text-5xl font-extrabold text-[#017249] tracking-wider">AKTIVITAS OUTDOOR</h1>
            <p class="mt-3 text-sm md:text-base text-[#0b5a3e] max-w-2xl mx-auto">
                Rasakan sensasi arung jeram, flying fox, paintball, ATV & offroad, serta kegiatan team building yang
                menghadirkan momen petualangan dan kebersamaan tak terlupakan.
            </p>
        </header>


        @include('partials.aktivitas.arung-jeram')

        <!-- FLYING FOX + OFFROAD (side-by-side) -->
        <section class="w-full mb-8">
            <div class="max-w-screen-xl mx-auto">
                <div class="activity-grid">
                    @include('partials.aktivitas.flying-fox')
                    @include('partials.aktivitas.offroad')
                </div>
            </div>
        </section>

        <!-- FUN ATV + PAINTBALL (side-by-side) -->
        <section class="w-full mb-8">
            <div class="max-w-screen-xl mx-auto">
                <div class="activity-grid">
                    @include('partials.aktivitas.fun-atv')
                    @include('partials.aktivitas.paintball')
                </div>
            </div>
        </section>

        @include('partials.aktivitas.team-building')

        @include('partials.aktivitas.information')

        @include('partials.aktivitas.activities-grid')

    </main>
@endsection