<!-- Navbar -->
<nav class="bg-white shadow-md fixed w-full top-0 z-50" data-aos="fade-down" data-aos-duration="600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full overflow-x-clip">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="flex items-center">
                        <img src="{{ asset('images/logo.png') }}" alt="Pineus Tilu Logo" class="h-16 w-auto">
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-1 flex-shrink">
                    <!-- Cerita -->
                    <a href="{{ route('cerita') }}" class="px-3 py-2 text-brand-primary hover:text-gray-700 transition-colors text-base cursor-pointer font-semibold" style="font-family: 'Poppins', sans-serif;">
                        Cerita
                    </a>

                    <!-- Beranda -->
                    <a href="/" class="px-3 py-2 text-brand-primary hover:text-gray-700 transition-colors text-base cursor-pointer font-semibold" style="font-family: 'Poppins', sans-serif;">
                        Beranda
                    </a>

                    <!-- Area Dropdown -->
                    <div class="relative dropdown-wrapper" data-dropdown="area">
                        <button class="dropdown-btn px-3 py-2 text-brand-primary hover:text-gray-700 transition-colors flex items-center text-base cursor-pointer font-semibold" style="font-family: 'Poppins', sans-serif;">
                            Area
                            <svg class="dropdown-icon w-4 h-4 ml-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu opacity-0 invisible absolute left-1/2 -translate-x-1/2 mt-2 w-52 bg-white rounded-lg shadow-xl transition-all duration-300 transform -translate-y-2 scale-95">
                            <div class="py-2">
                                <a href="/area/pineus-tilu-1" class="block px-4 py-3 text-brand-primary hover:bg-gray-100 hover:text-gray-700 transition-colors cursor-pointer">
                                    <div class="text-base font-semibold" style="font-family: 'Poppins', sans-serif;">Pineus Tilu 1</div>
                                </a>
                                <a href="/area/pineus-tilu-2" class="block px-4 py-3 text-brand-primary hover:bg-gray-100 hover:text-gray-700 transition-colors cursor-pointer">
                                    <div class="text-base font-semibold" style="font-family: 'Poppins', sans-serif;">Pineus Tilu 2</div>
                                </a>
                                <a href="/area/pineus-tilu-3-vip" class="block px-4 py-3 text-brand-primary hover:bg-gray-100 hover:text-gray-700 transition-colors cursor-pointer">
                                    <div class="text-base font-semibold" style="font-family: 'Poppins', sans-serif;">Pineus Tilu 3 VIP</div>
                                </a>
                                <a href="/area/pineus-tilu-4" class="block px-4 py-3 text-brand-primary hover:bg-gray-100 hover:text-gray-700 transition-colors cursor-pointer">
                                    <div class="text-base font-semibold" style="font-family: 'Poppins', sans-serif;">Pineus Tilu 4</div>
                                </a>
                                <a href="/area/pineus-tilu-cabin" class="block px-4 py-3 text-brand-primary hover:bg-gray-100 hover:text-gray-700 transition-colors cursor-pointer">
                                    <div class="text-base font-semibold" style="font-family: 'Poppins', sans-serif;">Pineus Tilu Cabin</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Aktivitas -->
                    <a href="{{ route('aktivitas') }}" class="px-3 py-2 text-brand-primary hover:text-gray-700 transition-colors text-base cursor-pointer font-semibold" style="font-family: 'Poppins', sans-serif;">
                        Aktivitas
                    </a>

                    <!-- Pedoman -->
                    <a href="{{ route('pedoman') }}" class="px-3 py-2 text-brand-primary hover:text-gray-700 transition-colors text-base cursor-pointer font-semibold" style="font-family: 'Poppins', sans-serif;">
                        Pedoman
                    </a>

                    <!-- Morikafe -->
                    <a href="{{ route('morikafe') }}" class="px-3 py-2 text-brand-primary hover:text-gray-700 transition-colors text-base cursor-pointer font-semibold" style="font-family: 'Poppins', sans-serif;">
                        Morikafe
                    </a>

                    <!-- FAQ -->
                    <a href="{{ route('faq') }}" class="px-3 py-2 text-brand-primary hover:text-gray-700 transition-colors text-base cursor-pointer font-semibold" style="font-family: 'Poppins', sans-serif;">
                        FAQ
                    </a>

                    <!-- Reservasi Dropdown -->
                    <div class="relative dropdown-wrapper" data-dropdown="reservasi">
                        <button class="dropdown-btn px-3 py-2 text-brand-primary hover:text-gray-700 transition-colors flex items-center text-base cursor-pointer font-semibold" style="font-family: 'Poppins', sans-serif;">
                            Reservasi
                            <svg class="dropdown-icon w-4 h-4 ml-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu opacity-0 invisible absolute left-1/2 -translate-x-1/2 mt-2 w-52 bg-white rounded-lg shadow-xl transition-all duration-300 transform -translate-y-2 scale-95">
                            <div class="py-2">
                                <a href="/reservasi/glamping" class="block px-4 py-3 text-brand-primary hover:bg-gray-100 hover:text-gray-700 transition-colors cursor-pointer">
                                    <div class="flex items-center text-base font-semibold" style="font-family: 'Poppins', sans-serif;">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                        </svg>
                                        Glamping
                                    </div>
                                </a>
                                <a href="/reservasi/outbound" class="block px-4 py-3 text-brand-primary hover:bg-gray-100 hover:text-gray-700 transition-colors cursor-pointer">
                                    <div class="flex items-center text-base font-semibold" style="font-family: 'Poppins', sans-serif;">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                        Outbound
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Profile/Login Button -->
                    @auth
                        <!-- Profile Dropdown -->
                        <div class="relative group ml-2">
                            <button class="flex items-center space-x-2 px-4 py-2 bg-brand-primary text-white rounded-full hover:bg-[#015a3a] transition-colors shadow-md hover:shadow-lg text-base cursor-pointer font-semibold" style="font-family: 'Poppins', sans-serif;">
                                <div class="w-8 h-8 bg-white text-brand-primary rounded-full flex items-center justify-center font-bold text-sm">
                                    {{ Auth::user()->initials() }}
                                </div>
                                <span>{{ Str::limit(Auth::user()->name, 15) }}</span>
                                <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2">
                                <div class="py-2">
                                    <a href="{{ route('profile') }}" class="block px-4 py-3 text-brand-primary hover:bg-gray-100 transition-colors cursor-pointer">
                                        <div class="flex items-center text-base font-semibold" style="font-family: 'Poppins', sans-serif;">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                            </svg>
                                            Profile
                                        </div>
                                    </a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="w-full text-left block px-4 py-3 text-brand-primary hover:bg-gray-100 transition-colors cursor-pointer">
                                            <div class="flex items-center text-base font-semibold" style="font-family: 'Poppins', sans-serif;">
                                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                                </svg>
                                                Sign out
                                            </div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Login Button -->
                        <a href="/login" class="ml-2 px-5 py-2 bg-brand-primary text-white rounded-full hover:bg-[#015a3a] transition-colors shadow-md hover:shadow-lg text-base cursor-pointer font-semibold" style="font-family: 'Poppins', sans-serif;">
                            Login
                        </a>
                    @endauth
                </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-brand-primary focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                        <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden bg-white border-t overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out transform origin-top scale-y-0">
            <div class="px-3 pt-2 pb-4 space-y-1 max-h-[calc(100vh-5rem)] overflow-y-auto">
                <a href="{{ route('cerita') }}" class="block px-3 py-2 text-brand-primary hover:bg-gray-100 hover:text-gray-700 rounded-lg transition-colors text-sm font-semibold" style="font-family: 'Poppins', sans-serif;">
                    Cerita
                </a>
                <a href="/" class="block px-3 py-2 text-brand-primary hover:bg-gray-100 hover:text-gray-700 rounded-lg transition-colors text-sm font-semibold" style="font-family: 'Poppins', sans-serif;">
                    Beranda
                </a>

                <!-- Mobile Area Dropdown -->
                <div class="relative mobile-dropdown-wrapper" data-mobile-dropdown="area">
                    <button class="mobile-dropdown-btn w-full flex justify-between items-center px-3 py-2 text-brand-primary hover:bg-gray-100 hover:text-gray-700 rounded-lg transition-colors text-sm font-semibold" style="font-family: 'Poppins', sans-serif;">
                        <span>Area</span>
                        <svg class="mobile-dropdown-icon w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-menu max-h-0 opacity-0 overflow-hidden transition-all duration-300 pl-3 mt-1 space-y-1">
                        <a href="/area/pineus-tilu-1" class="block px-3 py-1.5 text-sm text-brand-primary hover:bg-gray-100 hover:text-gray-700 rounded-lg font-semibold" style="font-family: 'Poppins', sans-serif;">Pineus Tilu 1</a>
                        <a href="/area/pineus-tilu-2" class="block px-3 py-1.5 text-sm text-brand-primary hover:bg-gray-100 hover:text-gray-700 rounded-lg font-semibold" style="font-family: 'Poppins', sans-serif;">Pineus Tilu 2</a>
                        <a href="/area/pineus-tilu-3-vip" class="block px-3 py-1.5 text-sm text-brand-primary hover:bg-gray-100 hover:text-gray-700 rounded-lg font-semibold" style="font-family: 'Poppins', sans-serif;">Pineus Tilu 3 VIP</a>
                        <a href="/area/pineus-tilu-4" class="block px-3 py-1.5 text-sm text-brand-primary hover:bg-gray-100 hover:text-gray-700 rounded-lg font-semibold" style="font-family: 'Poppins', sans-serif;">Pineus Tilu 4</a>
                        <a href="/area/pineus-tilu-cabin" class="block px-3 py-1.5 text-sm text-brand-primary hover:bg-gray-100 hover:text-gray-700 rounded-lg font-semibold" style="font-family: 'Poppins', sans-serif;">Pineus Tilu Cabin</a>
                    </div>
                </div>

                <a href="{{ route('aktivitas') }}" class="block px-3 py-2 text-brand-primary hover:bg-gray-100 hover:text-gray-700 rounded-lg transition-colors text-sm font-semibold" style="font-family: 'Poppins', sans-serif;">
                    Aktivitas
                </a>
                <a href="{{ route('pedoman') }}" class="block px-3 py-2 text-brand-primary hover:bg-gray-100 hover:text-gray-700 rounded-lg transition-colors text-sm font-semibold" style="font-family: 'Poppins', sans-serif;">
                    Pedoman
                </a>
                <a href="{{ route('morikafe') }}" class="block px-3 py-2 text-brand-primary hover:bg-gray-100 hover:text-gray-700 rounded-lg transition-colors text-sm font-semibold" style="font-family: 'Poppins', sans-serif;">
                    Morikafe
                </a>
                <a href="{{ route('faq') }}" class="block px-3 py-2 text-brand-primary hover:bg-gray-100 hover:text-gray-700 rounded-lg transition-colors text-sm font-semibold" style="font-family: 'Poppins', sans-serif;">
                    FAQ
                </a>

                <!-- Mobile Reservasi Dropdown -->
                <div class="relative mobile-dropdown-wrapper" data-mobile-dropdown="reservasi">
                    <button class="mobile-dropdown-btn w-full flex justify-between items-center px-3 py-2 text-brand-primary hover:bg-gray-100 hover:text-gray-700 rounded-lg transition-colors text-sm font-semibold" style="font-family: 'Poppins', sans-serif;">
                        <span>Reservasi</span>
                        <svg class="mobile-dropdown-icon w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-menu max-h-0 opacity-0 overflow-hidden transition-all duration-300 pl-3 mt-1 space-y-1">
                        <a href="/reservasi/glamping" class="block px-3 py-1.5 text-sm text-brand-primary hover:bg-gray-100 hover:text-gray-700 rounded-lg font-semibold" style="font-family: 'Poppins', sans-serif;">Glamping</a>
                        <a href="/reservasi/outbound" class="block px-3 py-1.5 text-sm text-brand-primary hover:bg-gray-100 hover:text-gray-700 rounded-lg font-semibold" style="font-family: 'Poppins', sans-serif;">Outbound</a>
                    </div>
                </div>

                <!-- Mobile Profile/Login -->
                @auth
                    <!-- Mobile Profile Section -->
                    <div class="border-t pt-3 mt-2">
                        <div class="px-3 py-2 flex items-center space-x-3 bg-gray-50 rounded-lg mb-2">
                            <div class="w-10 h-10 bg-brand-primary text-white rounded-full flex items-center justify-center font-bold">
                                {{ Auth::user()->initials() }}
                            </div>
                            <div>
                                <div class="font-semibold text-brand-primary text-sm" style="font-family: 'Poppins', sans-serif;">
                                    {{ Auth::user()->name }}
                                </div>
                                <div class="text-xs text-gray-500" style="font-family: 'Poppins', sans-serif;">
                                    {{ Auth::user()->email }}
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('profile') }}" class="block px-3 py-2 text-brand-primary hover:bg-gray-100 rounded-lg transition-colors text-sm font-semibold" style="font-family: 'Poppins', sans-serif;">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                Profile
                            </div>
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left block px-3 py-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors text-sm font-semibold" style="font-family: 'Poppins', sans-serif;">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                    </svg>
                                    Logout
                                </div>
                            </button>
                        </form>
                    </div>
                @else
                    <a href="/login" class="block mx-2 mt-3 px-6 py-2.5 bg-brand-primary text-white text-center rounded-full hover:bg-[#015a3a] transition-colors shadow-md text-sm font-semibold" style="font-family: 'Poppins', sans-serif;">
                        Login
                    </a>
                @endauth
            </div>
        </div>
</nav>

{{-- Navbar JavaScript - Inline untuk memastikan load di semua halaman --}}
<script>
(function() {
    'use strict';

    // Wait for DOM to be fully loaded
    function initNavbar() {
        // ============================================
        // DESKTOP DROPDOWNS
        // ============================================
        const desktopDropdowns = document.querySelectorAll('.dropdown-wrapper');
        
        desktopDropdowns.forEach(wrapper => {
            const btn = wrapper.querySelector('.dropdown-btn');
            const menu = wrapper.querySelector('.dropdown-menu');
            const icon = wrapper.querySelector('.dropdown-icon');
            let isOpen = false;

            if (!btn || !menu) return;

            // Toggle dropdown
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                
                // Close other dropdowns
                desktopDropdowns.forEach(other => {
                    if (other !== wrapper) {
                        const otherMenu = other.querySelector('.dropdown-menu');
                        const otherIcon = other.querySelector('.dropdown-icon');
                        if (otherMenu) {
                            otherMenu.classList.remove('opacity-100', 'visible', 'translate-y-0', 'scale-100');
                            otherMenu.classList.add('opacity-0', 'invisible', '-translate-y-2', 'scale-95');
                        }
                        if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
                    }
                });

                // Toggle current
                isOpen = !isOpen;
                if (isOpen) {
                    menu.classList.remove('opacity-0', 'invisible', '-translate-y-2', 'scale-95');
                    menu.classList.add('opacity-100', 'visible', 'translate-y-0', 'scale-100');
                    if (icon) icon.style.transform = 'rotate(180deg)';
                } else {
                    menu.classList.remove('opacity-100', 'visible', 'translate-y-0', 'scale-100');
                    menu.classList.add('opacity-0', 'invisible', '-translate-y-2', 'scale-95');
                    if (icon) icon.style.transform = 'rotate(0deg)';
                }
            });
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', () => {
            desktopDropdowns.forEach(wrapper => {
                const menu = wrapper.querySelector('.dropdown-menu');
                const icon = wrapper.querySelector('.dropdown-icon');
                if (menu) {
                    menu.classList.remove('opacity-100', 'visible', 'translate-y-0', 'scale-100');
                    menu.classList.add('opacity-0', 'invisible', '-translate-y-2', 'scale-95');
                }
                if (icon) icon.style.transform = 'rotate(0deg)';
            });
        });

        // ============================================
        // MOBILE MENU
        // ============================================
        const mobileMenuBtn = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        let mobileMenuOpen = false;

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                mobileMenuOpen = !mobileMenuOpen;

                if (mobileMenuOpen) {
                    // Open menu
                    mobileMenu.classList.remove('max-h-0', 'opacity-0', 'scale-y-0');
                    mobileMenu.classList.add('max-h-screen', 'opacity-100', 'scale-y-100');
                    menuIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                } else {
                    // Close menu
                    mobileMenu.classList.remove('max-h-screen', 'opacity-100', 'scale-y-100');
                    mobileMenu.classList.add('max-h-0', 'opacity-0', 'scale-y-0');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });

            // Close menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!mobileMenuBtn.contains(e.target) && !mobileMenu.contains(e.target) && mobileMenuOpen) {
                    mobileMenuOpen = false;
                    mobileMenu.classList.remove('max-h-screen', 'opacity-100', 'scale-y-100');
                    mobileMenu.classList.add('max-h-0', 'opacity-0', 'scale-y-0');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });
        }

        // ============================================
        // MOBILE DROPDOWNS
        // ============================================
        const mobileDropdowns = document.querySelectorAll('.mobile-dropdown-wrapper');
        
        mobileDropdowns.forEach(wrapper => {
            const btn = wrapper.querySelector('.mobile-dropdown-btn');
            const menu = wrapper.querySelector('.mobile-dropdown-menu');
            const icon = wrapper.querySelector('.mobile-dropdown-icon');
            let isOpen = false;

            if (!btn || !menu) return;

            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                isOpen = !isOpen;

                if (isOpen) {
                    // Open submenu
                    menu.style.maxHeight = menu.scrollHeight + 'px';
                    menu.classList.remove('opacity-0');
                    menu.classList.add('opacity-100');
                    if (icon) icon.style.transform = 'rotate(180deg)';
                } else {
                    // Close submenu
                    menu.style.maxHeight = '0';
                    menu.classList.remove('opacity-100');
                    menu.classList.add('opacity-0');
                    if (icon) icon.style.transform = 'rotate(0deg)';
                }
            });
        });
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initNavbar);
    } else {
        initNavbar();
    }

})();
</script>