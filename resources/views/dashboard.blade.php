@extends('layouts.app')

@section('title', 'Pineus Tilu - Glamping & Outbound')

@section('content')
    {{-- Hero Section --}}
    @include('partials.dashboard.hero-section')

    {{-- About Section --}}
    @include('partials.dashboard.about-section')

    {{-- Reservation CTA Section --}}
    <x-reservation-cta />

    {{-- Area Cards Section --}}
    @include('partials.dashboard.area-section')

    {{-- Map & Location Section --}}
    @include('partials.dashboard.map-location-section')

    {{-- Map Modal --}}
    @include('partials.dashboard.map-modal')

    {{-- Aksesibilitas Section --}}
    @include('partials.dashboard.accessibility-section')

    {{-- Reservation CTA Section --}}
    <x-reservation-cta />

    {{-- Accessibility Modals --}}
    @include('partials.modals.modal-jabodetabek')
    @include('partials.modals.modal-jawa-tengah-timur')
    @include('partials.modals.modal-luar-negeri')
@endsection

@push('scripts')
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endpush
