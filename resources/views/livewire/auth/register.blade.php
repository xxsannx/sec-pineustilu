<x-layouts.auth>
    <style>
        body {
            background: linear-gradient(135deg, #017249 0%, #018556 50%, #01694a 100%) !important;
        }
    </style>
    
    <div class="min-h-screen flex items-center justify-center px-4 py-8">
        <div class="w-full max-w-7xl mx-auto">
        <!-- Card Container -->
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
            <div class="grid lg:grid-cols-5 gap-0">
                <!-- Left Side - Branding (2 columns) -->
                <div class="hidden lg:flex lg:col-span-2 flex-col justify-center items-center bg-gradient-to-br from-[#017249] via-[#018556] to-[#01694a] p-12 text-white relative overflow-hidden">
                    <!-- Decorative circles -->
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full -mr-32 -mt-32"></div>
                    <div class="absolute bottom-0 left-0 w-48 h-48 bg-white opacity-5 rounded-full -ml-24 -mb-24"></div>
                    
                    <div class="relative z-10 text-center space-y-8">
                        <div class="animate-pulse">
                            <img src="{{ asset('images/logo.png') }}" alt="Pineus Tilu Logo" class="h-32 mx-auto brightness-0 invert drop-shadow-lg">
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-4xl font-bold">Selamat Datang!</h3>
                            <p class="text-lg opacity-90 leading-relaxed">Bergabunglah dengan kami dan nikmati pengalaman tak terlupakan di alam</p>
                        </div>
                        <div class="space-y-4 pt-8">
                            <div class="flex items-center gap-4 bg-white/10 backdrop-blur-sm rounded-lg p-4">
                                <div class="flex-shrink-0 w-10 h-10 bg-white/20 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <span class="text-base">Booking mudah dan cepat</span>
                            </div>
                            <div class="flex items-center gap-4 bg-white/10 backdrop-blur-sm rounded-lg p-4">
                                <div class="flex-shrink-0 w-10 h-10 bg-white/20 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <span class="text-base">Fasilitas glamping terbaik</span>
                            </div>
                            <div class="flex items-center gap-4 bg-white/10 backdrop-blur-sm rounded-lg p-4">
                                <div class="flex-shrink-0 w-10 h-10 bg-white/20 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <span class="text-base">Pengalaman alam menakjubkan</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Form (3 columns) -->
                <div class="lg:col-span-3 p-8 md:p-12 lg:p-16">
                    <!-- Mobile Logo -->
                    <div class="lg:hidden text-center mb-8">
                        <img src="{{ asset('images/logo.png') }}" alt="Pineus Tilu Logo" class="h-20 mx-auto mb-4">
                    </div>

                    <!-- Header -->
                    <div class="mb-8">
                        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">Daftar Akun</h2>
                        <p class="text-gray-600">Buat akun baru untuk memulai pengalaman Anda di Pineus Tilu</p>
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-6" :status="session('status')" />

                    <!-- Registration Form -->
                    <form method="POST" action="{{ route('register.store') }}" class="space-y-6">
                        @csrf

                        <!-- Name & Email Row -->
                        <div class="grid md:grid-cols-2 gap-5">
                    <!-- Name Input -->
                    <div class="space-y-1">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                            <input
                                id="name"
                                name="name"
                                type="text"
                                value="{{ old('name') }}"
                                required
                                autofocus
                                autocomplete="name"
                                placeholder="Masukkan nama lengkap"
                                class="block w-full pl-10 pr-3 py-3.5 text-gray-900 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#017249] focus:border-[#017249] transition duration-200 placeholder-gray-400 bg-gray-50 focus:bg-white"
                            />
                        </div>
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Input -->
                    <div class="space-y-1">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                                </svg>
                            </div>
                            <input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                                placeholder="email@example.com"
                                class="block w-full pl-10 pr-3 py-3.5 text-gray-900 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#017249] focus:border-[#017249] transition duration-200 placeholder-gray-400 bg-gray-50 focus:bg-white"
                            />
                        </div>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Phone Input with Country Code -->
                <div class="space-y-1">
                    <label for="phone" class="block text-sm font-medium text-gray-700">No. Telepon</label>
                    <div class="relative flex gap-2">
                        <select
                            id="country_code"
                            name="country_code"
                            class="block w-32 pl-3 pr-8 py-3.5 text-gray-900 text-sm border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#017249] focus:border-[#017249] transition duration-200 bg-gray-50 focus:bg-white"
                        >
                            <option value="+62" {{ old('country_code', '+62') == '+62' ? 'selected' : '' }}>🇮🇩 +62</option>
                            <option value="+60" {{ old('country_code') == '+60' ? 'selected' : '' }}>🇲🇾 +60</option>
                            <option value="+65" {{ old('country_code') == '+65' ? 'selected' : '' }}>🇸🇬 +65</option>
                            <option value="+66" {{ old('country_code') == '+66' ? 'selected' : '' }}>🇹🇭 +66</option>
                            <option value="+84" {{ old('country_code') == '+84' ? 'selected' : '' }}>🇻🇳 +84</option>
                            <option value="+63" {{ old('country_code') == '+63' ? 'selected' : '' }}>🇵🇭 +63</option>
                            <option value="+1" {{ old('country_code') == '+1' ? 'selected' : '' }}>🇺🇸 +1</option>
                            <option value="+44" {{ old('country_code') == '+44' ? 'selected' : '' }}>🇬🇧 +44</option>
                            <option value="+61" {{ old('country_code') == '+61' ? 'selected' : '' }}>🇦🇺 +61</option>
                            <option value="+81" {{ old('country_code') == '+81' ? 'selected' : '' }}>🇯🇵 +81</option>
                            <option value="+82" {{ old('country_code') == '+82' ? 'selected' : '' }}>🇰🇷 +82</option>
                            <option value="+86" {{ old('country_code') == '+86' ? 'selected' : '' }}>🇨🇳 +86</option>
                        </select>
                        <div class="relative flex-1">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <input
                                id="phone"
                                name="phone"
                                type="tel"
                                value="{{ old('phone') }}"
                                required
                                autocomplete="tel"
                                placeholder="812345678"
                                pattern="[0-9]{8,13}"
                                class="block w-full pl-10 pr-3 py-3.5 text-gray-900 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#017249] focus:border-[#017249] transition duration-200 placeholder-gray-400 bg-gray-50 focus:bg-white"
                            />
                        </div>
                    </div>
                    @error('phone')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    @error('country_code')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <p class="text-xs text-gray-500 mt-1">Masukkan nomor tanpa angka 0 di depan</p>
                </div>

                        <!-- Password Row -->
                        <div class="grid md:grid-cols-2 gap-5">
                    <!-- Password Input -->
                    <div class="space-y-1">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </div>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                required
                                autocomplete="new-password"
                                placeholder="Minimal 8 karakter"
                                class="block w-full pl-10 pr-10 py-3.5 text-gray-900 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#017249] focus:border-[#017249] transition duration-200 placeholder-gray-400 bg-gray-50 focus:bg-white"
                            />
                            <button
                                type="button"
                                onclick="togglePassword('password')"
                                class="absolute inset-y-0 right-0 pr-3 flex items-center"
                            >
                                <svg id="eye-icon-password" class="h-5 w-5 text-gray-400 hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </button>
                        </div>
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password Input -->
                    <div class="space-y-1">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <input
                                id="password_confirmation"
                                name="password_confirmation"
                                type="password"
                                required
                                autocomplete="new-password"
                                placeholder="Ulangi password"
                                class="block w-full pl-10 pr-10 py-3.5 text-gray-900 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#017249] focus:border-[#017249] transition duration-200 placeholder-gray-400 bg-gray-50 focus:bg-white"
                            />
                            <button
                                type="button"
                                onclick="togglePassword('password_confirmation')"
                                class="absolute inset-y-0 right-0 pr-3 flex items-center"
                            >
                                <svg id="eye-icon-password_confirmation" class="h-5 w-5 text-gray-400 hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </button>
                        </div>
                        @error('password_confirmation')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                        <!-- Submit Button -->
                        <div class="pt-3">
                            <button
                                type="submit"
                                class="w-full bg-gradient-to-r from-[#017249] to-[#018556] hover:from-[#015a3a] hover:to-[#017249] text-white font-bold py-4 px-6 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-[#017249] focus:ring-opacity-50"
                            >
                                <span class="flex items-center justify-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                                    </svg>
                                    Daftar Sekarang
                                </span>
                            </button>
                        </div>
                    </form>

                    <!-- Divider -->
                    <div class="relative my-8">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-4 bg-white text-gray-600 font-medium">Atau daftar dengan</span>
                        </div>
                    </div>

                    <!-- Google Registration Button -->
                    <button
                        type="button"
                        class="w-full flex items-center justify-center gap-3 bg-white border-2 border-gray-300 hover:border-[#017249] hover:bg-gray-50 text-gray-700 font-semibold py-3.5 px-4 rounded-xl shadow-sm hover:shadow-md transition-all duration-200"
                    >
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                        </svg>
                        Daftar dengan akun Google
                    </button>

                    <!-- Login Link -->
                    @if (Route::has('login'))
                        <div class="text-center pt-6 pb-2">
                            <span class="text-gray-600">Sudah punya akun? </span>
                            <a href="{{ route('login') }}" class="font-semibold text-[#017249] hover:text-[#015a3a] transition duration-200 underline-offset-4 hover:underline">
                                Masuk di sini
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        </div>
    </div>

    <script>
    function togglePassword(inputId) {
        const passwordInput = document.getElementById(inputId);
        const eyeIcon = document.getElementById('eye-icon-' + inputId);
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>';
        } else {
            passwordInput.type = 'password';
            eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>';
        }
    }
    </script>
</x-layouts.auth>
