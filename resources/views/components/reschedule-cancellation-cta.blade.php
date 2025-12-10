<!-- Reschedule & Cancellation Call to Action Section -->
<section class="py-8 md:py-12 px-4 bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="relative rounded-3xl shadow-xl border border-gray-200 overflow-hidden" data-aos="fade-up" data-aos-duration="800">
            <!-- Background Image with Overlay -->
            <div class="absolute inset-0" style="background-image: linear-gradient(rgba(55, 65, 81, 0.92), rgba(31, 41, 55, 0.92)), url('/images/siap.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
            
            <!-- Content -->
            <div class="relative z-10 px-6 py-8 md:px-10 md:py-10">
                <div class="max-w-4xl mx-auto">
                    <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                        <!-- Left Content -->
                        <div class="text-center md:text-left flex-1">
                            <h2 class="text-2xl md:text-3xl font-bold text-white mb-2" style="font-family: 'Bizon', sans-serif;" data-aos="fade-up" data-aos-duration="800">
                                PERLU UBAH JADWAL?
                            </h2>
                            <p class="text-sm text-white/90 max-w-xl" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                                Lakukan penjadwalan ulang atau pembatalan reservasi Anda dengan mudah
                            </p>
                        </div>

                        <!-- Right Buttons -->
                        <div class="flex flex-row gap-3 flex-shrink-0 w-full md:w-auto" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                            <a href="{{ url('/reschedule') }}" class="group inline-flex items-center justify-center gap-2 bg-white hover:bg-[#2563eb] text-[#2563eb] hover:text-white px-4 sm:px-6 py-3 rounded-full font-semibold transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105 text-xs sm:text-sm flex-1 md:flex-initial whitespace-nowrap">
                                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                </svg>
                                <span class="hidden sm:inline">Penjadwalan Ulang</span>
                                <span class="sm:hidden">Reschedule</span>
                            </a>
                            <a href="{{ url('/cancellation') }}" class="group inline-flex items-center justify-center gap-2 bg-white hover:bg-[#dc2626] text-[#dc2626] hover:text-white px-4 sm:px-6 py-3 rounded-full font-semibold transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105 text-xs sm:text-sm flex-1 md:flex-initial whitespace-nowrap">
                                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                <span class="hidden sm:inline">Pembatalan</span>
                                <span class="sm:hidden">Cancel</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>