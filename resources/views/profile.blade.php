@extends('layouts.app')

@section('title', ucfirst($currentTab ?? 'Profile') . ' - Pineus Tilu')

@section('content')
    <section class="relative px-4 py-32 md:py-40" data-aos="fade-up">
        <div class="max-w-7xl mx-auto relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                {{-- Sidebar Component --}}
                @include('partials.profile.sidebar', ['currentTab' => $currentTab ?? 'profile'])

                {{-- Main Content --}}
                <div class="lg:col-span-3 space-y-8">
                    {{-- Success Message --}}
                    @if(session('success'))
                        <div class="bg-green-50 border-l-4 border-[#017249] p-6 rounded-2xl shadow-md" data-aos="fade-down">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-[#017249] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <p class="text-[#017249] font-semibold font-poppins">
                                    {{ session('success') }}
                                </p>
                            </div>
                        </div>
                    @endif

                    {{-- Dynamic Content Based on Current Tab --}}
                    @switch($currentTab ?? 'profile')
                        @case('profile')
                            @include('partials.profile.profileinfo')
                            @break
                        
                        @case('bookings')
                            @include('partials.profile.mybookings', ['bookings' => $bookings ?? collect()])
                            @break
                        
                        @case('reschedule')
                            @include('partials.profile.myreschedule', ['reschedules' => $reschedules ?? collect()])
                            @break
                        
                        @case('cancellation')
                            @include('partials.profile.mycancellation', ['cancellations' => $cancellations ?? collect()])
                            @break
                        
                        @default
                            @include('partials.profile.profileinfo')
                    @endswitch
                </div>
            </div>
        </div>
    </section>

    {{-- Modals --}}
    @include('partials.modals.modalprofile')

    {{-- Profile Script --}}
    <script src="{{ asset('js/profile.js') }}"></script>
@endsection
