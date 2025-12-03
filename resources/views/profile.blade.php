@extends('layouts.app')

@section('title', 'Profile - Pineus Tilu')

@section('content')
    <section class="relative px-4 py-32 md:py-40" data-aos="fade-up">
        <div class="max-w-7xl mx-auto relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Sidebar -->
                <div class="lg:col-span-1" data-aos="fade-right">
                    <div class="bg-white rounded-3xl shadow-xl p-8 sticky top-24">
                        <!-- Profile Avatar -->
                        <div class="flex flex-col items-center mb-8">
                            <div class="w-28 h-28 rounded-full bg-gradient-to-br from-[#017249] to-[#015a3a] flex items-center justify-center text-white text-4xl font-bold mb-4 shadow-lg">
                                {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                            </div>
                            <h3 class="text-xl font-bold text-gray-800" style="font-family: 'Poppins', sans-serif;">
                                {{ auth()->user()->name }}
                            </h3>
                            <p class="text-sm text-gray-500 mt-1" style="font-family: 'Poppins', sans-serif;">
                                {{ auth()->user()->email }}
                            </p>
                        </div>

                        <!-- Navigation Menu -->
                        <nav class="space-y-2">
                            <a href="{{ route('profile') }}" 
                               class="flex items-center px-5 py-3.5 text-white bg-[#017249] rounded-xl transition-all duration-300 hover:shadow-lg font-semibold"
                               style="font-family: 'Poppins', sans-serif;">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                Profil
                            </a>
                            <a href="#" 
                               class="flex items-center px-5 py-3.5 text-gray-700 hover:bg-[#f0fdf4] rounded-xl transition-all duration-300 font-medium"
                               style="font-family: 'Poppins', sans-serif;">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                </svg>
                                Booking
                            </a>
                            <a href="#" 
                               class="flex items-center px-5 py-3.5 text-gray-700 hover:bg-[#f0fdf4] rounded-xl transition-all duration-300 font-medium"
                               style="font-family: 'Poppins', sans-serif;">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                Reschedule
                            </a>
                            <a href="#" 
                               class="flex items-center px-5 py-3.5 text-gray-700 hover:bg-[#f0fdf4] rounded-xl transition-all duration-300 font-medium"
                               style="font-family: 'Poppins', sans-serif;">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                Cancellation
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" 
                                        class="w-full flex items-center px-5 py-3.5 text-red-600 hover:bg-red-50 rounded-xl transition-all duration-300 font-medium"
                                        style="font-family: 'Poppins', sans-serif;">
                                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                    </svg>
                                    Sign Out
                                </button>
                            </form>
                        </nav>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="lg:col-span-3 space-y-8">
                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="bg-green-50 border-l-4 border-[#017249] p-6 rounded-2xl shadow-md" data-aos="fade-down">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-[#017249] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <p class="text-[#017249] font-semibold" style="font-family: 'Poppins', sans-serif;">
                                    {{ session('success') }}
                                </p>
                            </div>
                        </div>
                    @endif

                    <!-- Personal Profile Card -->
                    <div class="bg-white rounded-3xl shadow-xl p-8" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="text-2xl font-bold text-gray-800 mb-8" style="font-family: 'Poppins', sans-serif;">
                            Personal Profile
                        </h2>

                        <div class="space-y-6">
                            <!-- Profile Section -->
                            <div class="border-b border-gray-200 pb-4">
                                <h3 class="text-lg font-semibold text-gray-700 mb-4" style="font-family: 'Poppins', sans-serif;">Profile</h3>
                                
                                <!-- Name -->
                                <div class="flex items-center justify-between py-3 hover:bg-gray-50 px-4 rounded-lg transition-colors">
                                    <div class="flex-1">
                                        <p class="text-sm text-gray-500" style="font-family: 'Poppins', sans-serif;">Name</p>
                                        <p class="text-base font-medium text-gray-800 mt-1" style="font-family: 'Poppins', sans-serif;">
                                            {{ auth()->user()->name }}
                                        </p>
                                    </div>
                                    <button type="button" onclick="openModal('name')" class="cursor-pointer text-[#017249] hover:text-[#015a3a] font-semibold text-sm transition-colors" style="font-family: 'Poppins', sans-serif;">
                                        Ubah
                                    </button>
                                </div>
                            </div>

                            <!-- Contact Section -->
                            <div class="border-b border-gray-200 pb-4">
                                <h3 class="text-lg font-semibold text-gray-700 mb-4" style="font-family: 'Poppins', sans-serif;">Contact</h3>
                                
                                <!-- Email -->
                                <div class="flex items-center justify-between py-3 hover:bg-gray-50 px-4 rounded-lg transition-colors">
                                    <div class="flex-1">
                                        <p class="text-sm text-gray-500" style="font-family: 'Poppins', sans-serif;">Email</p>
                                        <p class="text-base font-medium text-gray-800 mt-1" style="font-family: 'Poppins', sans-serif;">
                                            {{ auth()->user()->email }}
                                        </p>
                                    </div>
                                    <button type="button" onclick="openModal('email')" class="cursor-pointer text-[#017249] hover:text-[#015a3a] font-semibold text-sm transition-colors" style="font-family: 'Poppins', sans-serif;">
                                        Ubah
                                    </button>
                                </div>

                                <!-- Phone Number -->
                                <div class="flex items-center justify-between py-3 hover:bg-gray-50 px-4 rounded-lg transition-colors">
                                    <div class="flex-1">
                                        <p class="text-sm text-gray-500" style="font-family: 'Poppins', sans-serif;">Phone Number</p>
                                        <p class="text-base font-medium text-gray-800 mt-1" style="font-family: 'Poppins', sans-serif;">
                                            {{ auth()->user()->phone ?? 'Not set' }}
                                        </p>
                                    </div>
                                    <button type="button" onclick="openModal('phone')" class="cursor-pointer text-[#017249] hover:text-[#015a3a] font-semibold text-sm transition-colors" style="font-family: 'Poppins', sans-serif;">
                                        Ubah
                                    </button>
                                </div>

                                <!-- Password -->
                                <div class="flex items-center justify-between py-3 hover:bg-gray-50 px-4 rounded-lg transition-colors">
                                    <div class="flex-1">
                                        <p class="text-sm text-gray-500" style="font-family: 'Poppins', sans-serif;">Password</p>
                                        <p class="text-base font-medium text-gray-800 mt-1" style="font-family: 'Poppins', sans-serif;">
                                            ••••••••••••
                                        </p>
                                    </div>
                                    <button type="button" onclick="openModal('password')" class="cursor-pointer text-[#017249] hover:text-[#015a3a] font-semibold text-sm transition-colors" style="font-family: 'Poppins', sans-serif;">
                                        Ubah
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modals -->
    <!-- Name Modal -->
    <div id="nameModal" class="hidden fixed inset-0 backdrop-blur-sm  bg-opacity-20 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-8" onclick="event.stopPropagation()">
            <h3 class="text-2xl font-bold text-gray-800 mb-6" style="font-family: 'Poppins', sans-serif;">Ubah Name</h3>
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="field" value="name">
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-2" style="font-family: 'Poppins', sans-serif;">Name</label>
                    <input type="text" name="name" value="{{ auth()->user()->name }}" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#017249] focus:border-transparent"
                           style="font-family: 'Poppins', sans-serif;">
                </div>
                <div class="flex gap-3">
                    <button type="button" onclick="closeModal('name')"
                            class="flex-1 px-6 py-3 border border-gray-300 text-gray-700 rounded-xl hover:bg-gray-50 font-semibold transition-colors"
                            style="font-family: 'Poppins', sans-serif;">
                        Cancel
                    </button>
                    <button type="submit"
                            class="flex-1 px-6 py-3 bg-[#017249] text-white rounded-xl hover:bg-[#015a3a] font-semibold transition-colors"
                            style="font-family: 'Poppins', sans-serif;">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Email Modal -->
    <div id="emailModal" class="hidden fixed inset-0 backdrop-blur-sm  bg-opacity-20 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-8" onclick="event.stopPropagation()">
            <h3 class="text-2xl font-bold text-gray-800 mb-6" style="font-family: 'Poppins', sans-serif;">Ubah Email</h3>
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="field" value="email">
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-2" style="font-family: 'Poppins', sans-serif;">Email</label>
                    <input type="email" name="email" value="{{ auth()->user()->email }}" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#017249] focus:border-transparent"
                           style="font-family: 'Poppins', sans-serif;">
                </div>
                <div class="flex gap-3">
                    <button type="button" onclick="closeModal('email')"
                            class="flex-1 px-6 py-3 border border-gray-300 text-gray-700 rounded-xl hover:bg-gray-50 font-semibold transition-colors"
                            style="font-family: 'Poppins', sans-serif;">
                        Cancel
                    </button>
                    <button type="submit"
                            class="flex-1 px-6 py-3 bg-[#017249] text-white rounded-xl hover:bg-[#015a3a] font-semibold transition-colors"
                            style="font-family: 'Poppins', sans-serif;">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Phone Modal -->
    <div id="phoneModal" class="hidden fixed inset-0 backdrop-blur-sm  bg-opacity-20 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-8" onclick="event.stopPropagation()">
            <h3 class="text-2xl font-bold text-gray-800 mb-6" style="font-family: 'Poppins', sans-serif;">Ubah Phone Number</h3>
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="field" value="phone">
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-2" style="font-family: 'Poppins', sans-serif;">Phone Number</label>
                    <input type="tel" name="phone" value="{{ auth()->user()->phone }}" placeholder="08123456789"
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#017249] focus:border-transparent"
                           style="font-family: 'Poppins', sans-serif;">
                </div>
                <div class="flex gap-3">
                    <button type="button" onclick="closeModal('phone')"
                            class="flex-1 px-6 py-3 border border-gray-300 text-gray-700 rounded-xl hover:bg-gray-50 font-semibold transition-colors"
                            style="font-family: 'Poppins', sans-serif;">
                        Cancel
                    </button>
                    <button type="submit"
                            class="flex-1 px-6 py-3 bg-[#017249] text-white rounded-xl hover:bg-[#015a3a] font-semibold transition-colors"
                            style="font-family: 'Poppins', sans-serif;">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Password Modal -->
    <div id="passwordModal" class="hidden fixed inset-0 backdrop-blur-sm  bg-opacity-20 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-8" onclick="event.stopPropagation()">
            <h3 class="text-2xl font-bold text-gray-800 mb-6" style="font-family: 'Poppins', sans-serif;">Ubah Password</h3>
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="field" value="password">
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2" style="font-family: 'Poppins', sans-serif;">Current Password</label>
                    <input type="password" name="current_password" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#017249] focus:border-transparent"
                           style="font-family: 'Poppins', sans-serif;">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2" style="font-family: 'Poppins', sans-serif;">New Password</label>
                    <input type="password" name="password" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#017249] focus:border-transparent"
                           style="font-family: 'Poppins', sans-serif;">
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-2" style="font-family: 'Poppins', sans-serif;">Confirm New Password</label>
                    <input type="password" name="password_confirmation" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#017249] focus:border-transparent"
                           style="font-family: 'Poppins', sans-serif;">
                </div>
                <div class="flex gap-3">
                    <button type="button" onclick="closeModal('password')"
                            class="flex-1 px-6 py-3 border border-gray-300 text-gray-700 rounded-xl hover:bg-gray-50 font-semibold transition-colors"
                            style="font-family: 'Poppins', sans-serif;">
                        Cancel
                    </button>
                    <button type="submit"
                            class="flex-1 px-6 py-3 bg-[#017249] text-white rounded-xl hover:bg-[#015a3a] font-semibold transition-colors"
                            style="font-family: 'Poppins', sans-serif;">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openModal(type) {
            document.getElementById(type + 'Modal').classList.remove('hidden');
        }

        function closeModal(type) {
            document.getElementById(type + 'Modal').classList.add('hidden');
        }

        // Close modal when clicking outside
        document.querySelectorAll('[id$="Modal"]').forEach(modal => {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    this.classList.add('hidden');
                }
            });
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                document.querySelectorAll('[id$="Modal"]').forEach(modal => {
                    modal.classList.add('hidden');
                });
            }
        });
    </script>
@endsection
