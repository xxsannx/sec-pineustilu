@extends('layouts.app')

@section('title', 'Reschedule - Pineus Tilu - Glamping & Outbound')

@section('mainClass', 'pt-24 bg-[#f6fbf8] min-h-screen')
@section('content')
    <div class="w-full max-w-screen-xl mx-auto px-6">
        <div class="min-h-[calc(100svh-6rem-12rem)] py-8">
            <div class="w-full max-w-3xl mx-auto text-center">
                <x-page-heading title="RESCHEDULE" wrapperClass="text-center" />
                <p class="mt-4 text-gray-600">
                    The booking code can be found in your order details page
                </p>

                {{-- Success/Error Messages --}}
                @if(session('success'))
                    <div class="mt-6 p-4 bg-green-50 border border-green-200 rounded-xl text-green-700 text-sm">
                        {{ session('success') }}
                    </div>
                @endif

                @if(isset($error) && $error)
                    <div class="mt-6 p-4 bg-red-50 border border-red-200 rounded-xl text-red-700 text-sm">
                        {{ $error }}
                    </div>
                @endif

                {{-- Search Form --}}
                <form class="mt-8 flex items-center justify-center" action="{{ route('reschedule') }}" method="GET">
                    <label for="redeem-code" class="sr-only">Booking Code</label>
                    <div class="flex w-full max-w-2xl">
                        <input
                            id="redeem-code"
                            type="text"
                            name="code"
                            value="{{ $code ?? request('code') }}"
                            placeholder="Enter your Booking Code"
                            class="w-full px-6 md:px-7 py-3 md:py-4 bg-white/90 border border-[#146B4A] rounded-l-full rounded-r-none text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#146B4A] focus:border-[#146B4A] uppercase tracking-wider" />
                        <button
                            type="submit"
                            class="px-6 md:px-8 py-3 md:py-4 bg-[#146B4A] text-white font-medium rounded-r-full rounded-l-none hover:bg-[#115a3e] focus:outline-none focus:ring-2 focus:ring-[#146B4A] -ml-px">
                            Search
                        </button>
                    </div>
                </form>

                {{-- Booking Details (if found) --}}
                @if(isset($booking) && $booking)
                    <div class="mt-10 bg-white rounded-2xl shadow-lg border border-gray-200 p-6 md:p-8 text-left">
                        <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-100">
                            <div>
                                <h3 class="text-lg font-bold text-[#017249]">Booking Found</h3>
                                <p class="text-sm text-gray-500">Code: {{ $booking->token_code }}</p>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold rounded-full 
                                {{ $booking->status->value === 'berhasil' ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-700' }}">
                                {{ $booking->status->label() }}
                            </span>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            {{-- Guest Info --}}
                            <div>
                                <h4 class="text-sm font-semibold text-[#017249] mb-3">Guest Information</h4>
                                <div class="space-y-2 text-sm">
                                    <p><span class="text-gray-500">Name:</span> <span class="font-medium">{{ $booking->guest_name }}</span></p>
                                    <p><span class="text-gray-500">Phone:</span> <span class="font-medium">{{ $booking->guest_phone }}</span></p>
                                    <p><span class="text-gray-500">Email:</span> <span class="font-medium">{{ $booking->guest_email }}</span></p>
                                </div>
                            </div>

                            {{-- Booking Info --}}
                            <div>
                                <h4 class="text-sm font-semibold text-[#017249] mb-3">Booking Details</h4>
                                <div class="space-y-2 text-sm">
                                    <p><span class="text-gray-500">Type:</span> <span class="font-medium capitalize">{{ $booking->booking_type }}</span></p>
                                    @if($booking->booking_type === 'glamping' && $booking->bookingDetails->first())
                                        @php $detail = $booking->bookingDetails->first(); @endphp
                                        <p><span class="text-gray-500">Check-in:</span> <span class="font-medium">{{ $detail->check_in?->format('d M Y') }}</span></p>
                                        <p><span class="text-gray-500">Check-out:</span> <span class="font-medium">{{ $detail->check_out?->format('d M Y') }}</span></p>
                                        <p><span class="text-gray-500">Area:</span> <span class="font-medium">{{ $detail->unit?->area?->name ?? '-' }}</span></p>
                                    @elseif($booking->booking_type === 'outbound' && $booking->bookingOutbounds->first())
                                        @php $outbound = $booking->bookingOutbounds->first(); @endphp
                                        <p><span class="text-gray-500">Activity Date:</span> <span class="font-medium">{{ $outbound->schedule_date?->format('d M Y') }}</span></p>
                                        <p><span class="text-gray-500">Activity:</span> <span class="font-medium">{{ $outbound->outbound?->name ?? '-' }}</span></p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- Reschedule Action --}}
                        <div class="mt-8 pt-6 border-t border-gray-100">
                            <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-4 mb-4">
                                <p class="text-sm text-yellow-800">
                                    <svg class="w-5 h-5 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Untuk mengajukan reschedule, silakan hubungi admin kami melalui WhatsApp dengan menyertakan kode booking Anda.
                                </p>
                            </div>
                            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20mengajukan%20reschedule%20untuk%20booking%20dengan%20kode:%20{{ $booking->token_code }}" 
                               target="_blank"
                               class="inline-flex items-center justify-center w-full sm:w-auto px-8 py-3 bg-[#017249] text-white font-semibold rounded-xl hover:bg-[#015a3a] transition-colors">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                                Contact via WhatsApp
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/pages/reschedule.js')
@endpush
