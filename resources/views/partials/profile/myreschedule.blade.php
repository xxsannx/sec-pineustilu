{{-- My Reschedule Content --}}
<div class="bg-white rounded-3xl shadow-xl p-8" data-aos="fade-up" data-aos-delay="100">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-800 font-poppins">Reschedule</h2>
        </div>
    </div>

    {{-- Search and Filter --}}
    <div class="flex flex-col md:flex-row gap-4 mb-6">
        <div class="flex-1 relative">
            <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            <input type="text" 
                   id="rescheduleSearch"
                   placeholder="search" 
                   class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#017249] focus:border-transparent font-poppins text-sm">
        </div>

        <button class="px-6 py-3 border-2 border-gray-200 rounded-xl hover:border-[#017249] hover:bg-[#f0fdf4] transition-all duration-300 cursor-pointer">
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
            </svg>
        </button>
    </div>
</div>

{{-- Reschedule Cards --}}
<div id="reschedulesContainer" class="space-y-6">
    @forelse($reschedules as $index => $reschedule)
        <div class="reschedule-card bg-white rounded-2xl border border-gray-200 p-6 hover:shadow-lg transition-all duration-300"
             data-aos="fade-up" data-aos-delay="{{ 100 + ($index * 50) }}">
            
            <div class="grid md:grid-cols-[1fr_auto_1fr] gap-6 items-center">
                {{-- Old Schedule --}}
                <div class="bg-gray-50 rounded-xl p-5">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center flex-shrink-0 shadow-sm">
                            @if(isset($reschedule->deck))
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                            @else
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            @endif
                        </div>
                        
                        <div>
                            <h3 class="font-bold text-gray-900 font-poppins">{{ $reschedule->area_type ?? 'Glamping' }}</h3>
                            <p class="text-sm text-gray-500 font-poppins">{{ \Carbon\Carbon::parse($reschedule->old_check_in)->format('d F Y') }}</p>
                        </div>
                    </div>

                    <div class="space-y-2 text-sm font-poppins">
                        <div class="flex items-center">
                            <span class="text-gray-600 w-24">Area</span>
                            <span class="text-gray-900 font-medium">: {{ $reschedule->area }}</span>
                        </div>
                        @if(isset($reschedule->deck))
                            <div class="flex items-center">
                                <span class="text-gray-600 w-24">Deck</span>
                                <span class="text-gray-900 font-medium">: {{ $reschedule->deck }}</span>
                            </div>
                        @elseif(isset($reschedule->outbound))
                            <div class="flex items-center">
                                <span class="text-gray-600 w-24">Outbound</span>
                                <span class="text-gray-900 font-medium">: {{ $reschedule->outbound }}</span>
                            </div>
                        @endif
                        <div class="flex items-center">
                            <span class="text-gray-600 w-24">Partisipan</span>
                            <span class="text-gray-900 font-medium">: {{ $reschedule->guests }} Orang</span>
                        </div>
                    </div>

                    <div class="mt-4 pt-4 border-t border-gray-200">
                        <p class="text-xs text-gray-600 font-poppins mb-1">Total Harga</p>
                        <p class="text-lg font-bold text-gray-900 font-poppins">Rp. {{ number_format($reschedule->total, 0, ',', '.') }}</p>
                    </div>
                </div>

                {{-- Arrow --}}
                <div class="flex flex-col items-center justify-center py-4">
                    <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center mb-2">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-blue-600 font-poppins">Rescheduled</span>
                </div>

                {{-- New Schedule --}}
                <div class="bg-green-50 rounded-xl p-5">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center flex-shrink-0 shadow-sm">
                                @if(isset($reschedule->deck))
                                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                    </svg>
                                @else
                                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                @endif
                            </div>
                            
                            <div>
                                <h3 class="font-bold text-gray-900 font-poppins">{{ $reschedule->area_type ?? 'Glamping' }}</h3>
                                <p class="text-sm text-gray-500 font-poppins">{{ \Carbon\Carbon::parse($reschedule->new_check_in)->format('d F Y') }}</p>
                            </div>
                        </div>
                        
                        <span class="px-3 py-1 rounded-full text-xs font-semibold font-poppins bg-[#017249] text-white">
                            Berhasil
                        </span>
                    </div>

                    <div class="space-y-2 text-sm font-poppins">
                        <div class="flex items-center">
                            <span class="text-gray-600 w-24">Area</span>
                            <span class="text-gray-900 font-medium">: {{ $reschedule->area }}</span>
                        </div>
                        @if(isset($reschedule->deck))
                            <div class="flex items-center">
                                <span class="text-gray-600 w-24">Deck</span>
                                <span class="text-gray-900 font-medium">: {{ $reschedule->deck }}</span>
                            </div>
                        @elseif(isset($reschedule->outbound))
                            <div class="flex items-center">
                                <span class="text-gray-600 w-24">Outbound</span>
                                <span class="text-gray-900 font-medium">: {{ $reschedule->outbound }}</span>
                            </div>
                        @endif
                        <div class="flex items-center">
                            <span class="text-gray-600 w-24">Partisipan</span>
                            <span class="text-gray-900 font-medium">: {{ $reschedule->guests }} Orang</span>
                        </div>
                    </div>

                    <div class="mt-4 pt-4 border-t border-green-200">
                        <p class="text-xs text-gray-600 font-poppins mb-1">Total Reschedule</p>
                        <p class="text-lg font-bold text-gray-900 font-poppins">Rp. {{ number_format($reschedule->total, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="bg-white rounded-3xl shadow-xl p-12 text-center" data-aos="fade-up">
            <div class="w-24 h-24 mx-auto mb-6 bg-gray-100 rounded-full flex items-center justify-center">
                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2 font-poppins">Belum Ada Reschedule</h3>
            <p class="text-gray-500 mb-6 font-poppins">Anda belum pernah melakukan reschedule</p>
            <a href="{{ route('profile', ['tab' => 'bookings']) }}" class="inline-block px-8 py-3 bg-[#017249] text-white rounded-lg hover:bg-[#015a3a] font-semibold transition-all duration-300 font-poppins text-sm">
                Lihat Booking
            </a>
        </div>
    @endforelse
</div>

{{-- Load More --}}
@if($reschedules->count() > 0)
    <div class="text-center mt-8" data-aos="fade-up">
        <button class="px-8 py-3 bg-[#017249] text-white rounded-lg hover:bg-[#015a3a] font-semibold transition-all duration-300 font-poppins text-sm">
            Muat Lebih Banyak
        </button>
    </div>
@endif