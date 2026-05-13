<x-layouts.auth>
    <div class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 py-8 sm:py-12 relative z-10">
        <div class="w-full max-w-md mx-auto">
            <!-- Card Container -->
            <div class="bg-white rounded-3xl shadow-xl border-2 border-gray-100 p-6 sm:p-8 lg:p-10 space-y-6 backdrop-blur-sm relative">
                
                {{-- Back Button - Top Left Corner --}}
                <a href="{{ url('/') }}"
                    class="absolute top-4 left-4 sm:top-6 sm:left-6 z-20 inline-flex items-center gap-2 text-gray-600 hover:text-[#017249] transition-all duration-200 group"
                    aria-label="Go back to home">
                    <div class="p-2 sm:p-2.5 bg-gray-100 rounded-xl shadow-md border border-gray-200 group-hover:shadow-lg group-hover:bg-[#017249]/10 group-hover:border-[#017249]/20 group-hover:-translate-x-1 transition-all duration-200">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gray-500 group-hover:text-[#017249] transition-colors duration-200"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium group-hover:text-[#017249] transition-colors duration-200">Back</span>
                </a>

                <!-- Logo & Title -->
                <div class="text-center space-y-3 sm:space-y-4 pt-10 sm:pt-12">
                    <div class="flex justify-center mb-3 sm:mb-4">
                        <img src="{{ asset('images/dashboard/logo.png') }}" alt="Pineus Tilu Logo"
                            class="h-24 sm:h-28 lg:h-32 w-auto object-contain">
                    </div>
                    <h1 class="text-xl sm:text-2xl lg:text-3xl font-bold text-[#017249]"
                        style="font-family: 'Bizon', sans-serif;">Daftar Akun Baru</h1>
                    <p class="text-black text-base sm:text-base">Buat akun untuk melanjutkan</p>
                </div>

                @if ($errors->any())
                    <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-2xl">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-red-500 mr-2 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                            </svg>
                            <div class="text-red-700 text-sm font-medium">
                                <ul class="list-disc pl-4 space-y-1">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif

                <form action="{{ route('register.otp.post') }}" method="POST" class="space-y-5">
                    @csrf
                    
                    <!-- Name Input -->
                    <div class="space-y-2">
                        <label class="block text-xs sm:text-sm font-semibold text-gray-700">Nama Lengkap</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 sm:pl-4 flex items-center pointer-events-none">
                                <div class="bg-[#017249]/10 p-1.5 sm:p-2 rounded-2xl group-focus-within:bg-[#017249]/20 transition-colors duration-200">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#017249]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                            </div>
                            <input name="name" type="text" value="{{ old('name') }}" required
                                placeholder="Masukkan nama lengkap"
                                class="block w-full pl-14 sm:pl-16 pr-4 py-3 sm:py-3.5 text-sm sm:text-base text-gray-900 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#017249]/20 focus:border-[#017249] transition-all duration-200 placeholder-gray-400 hover:border-gray-300" />
                        </div>
                    </div>

                    <!-- Email Input -->
                    <div class="space-y-2">
                        <label class="block text-xs sm:text-sm font-semibold text-gray-700">Email</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 sm:pl-4 flex items-center pointer-events-none">
                                <div class="bg-[#017249]/10 p-1.5 sm:p-2 rounded-2xl group-focus-within:bg-[#017249]/20 transition-colors duration-200">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#017249]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                </div>
                            </div>
                            <input name="email" type="email" value="{{ old('email') }}" required
                                placeholder="email@domain.com"
                                class="block w-full pl-14 sm:pl-16 pr-4 py-3 sm:py-3.5 text-sm sm:text-base text-gray-900 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#017249]/20 focus:border-[#017249] transition-all duration-200 placeholder-gray-400 hover:border-gray-300" />
                        </div>
                    </div>

                    <!-- Phone Input -->
                    <div class="space-y-2">
                        <label class="block text-xs sm:text-sm font-semibold text-gray-700">Nomor WhatsApp / HP</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 sm:pl-4 flex items-center pointer-events-none">
                                <div class="bg-[#017249]/10 p-1.5 sm:p-2 rounded-2xl group-focus-within:bg-[#017249]/20 transition-colors duration-200">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#017249]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                            </div>
                            <input name="phone" type="text" value="{{ old('phone') ?? '+628' }}" required
                                placeholder="Contoh: +628123456789"
                                class="block w-full pl-14 sm:pl-16 pr-4 py-3 sm:py-3.5 text-sm sm:text-base text-gray-900 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#017249]/20 focus:border-[#017249] transition-all duration-200 placeholder-gray-400 hover:border-gray-300" />
                        </div>
                        <p class="text-xs text-gray-500 mt-1 pl-1">Gunakan format internasional (contoh: +628...)</p>
                    </div>

                    <!-- Password Input -->
                    <div class="space-y-2">
                        <label class="block text-xs sm:text-sm font-semibold text-gray-700">Password</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 sm:pl-4 flex items-center pointer-events-none">
                                <div class="bg-[#017249]/10 p-1.5 sm:p-2 rounded-2xl group-focus-within:bg-[#017249]/20 transition-colors duration-200">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#017249]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                            </div>
                            <input id="password" name="password" type="password" required minlength="8"
                                placeholder="Minimal 8 karakter"
                                class="block w-full pl-14 sm:pl-16 pr-11 sm:pr-12 py-3 sm:py-3.5 text-sm sm:text-base text-gray-900 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#017249]/20 focus:border-[#017249] transition-all duration-200 placeholder-gray-400 hover:border-gray-300" />
                            <button type="button" data-toggle-password="password"
                                class="absolute inset-y-0 right-0 pr-3 sm:pr-4 flex items-center hover:scale-110 transition-transform duration-200 cursor-pointer" aria-label="Toggle password visibility">
                                <svg id="eye-icon-password" class="w-5 h-5 text-gray-400 hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>

                        <!-- Password Strength Indicator -->
                        <div class="mt-3 px-1">
                            <div class="flex justify-between items-center mb-1.5">
                                <span class="text-xs font-semibold text-gray-600">Kekuatan: <span id="strength-text" class="text-gray-400 font-normal">Belum diisi</span></span>
                                <span id="strength-percent" class="text-xs font-bold text-gray-500">0%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5 mb-1 overflow-hidden">
                                <div id="strength-bar" class="bg-gray-300 h-1.5 rounded-full transition-all duration-300 ease-out" style="width: 0%"></div>
                            </div>
                        </div>

                        <div class="mt-2 text-xs text-gray-500 space-y-0.5 pl-1 bg-gray-50 p-2 rounded-lg border border-gray-100">
                            <p class="font-semibold text-gray-600 mb-1">Kriteria Password:</p>
                            <ul class="list-disc pl-4 space-y-0.5">
                                <li>Min. 8 karakter</li>
                                <li>Huruf besar & kecil</li>
                                <li>Minimal satu angka</li>
                                <li>Minimal satu simbol (!@#$%^&*)</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Password Confirmation -->
                    <div class="space-y-2">
                        <label class="block text-xs sm:text-sm font-semibold text-gray-700">Konfirmasi Password</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 sm:pl-4 flex items-center pointer-events-none">
                                <div class="bg-[#017249]/10 p-1.5 sm:p-2 rounded-2xl group-focus-within:bg-[#017249]/20 transition-colors duration-200">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-[#017249]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                            </div>
                            <input id="password_confirmation" name="password_confirmation" type="password" required minlength="8"
                                placeholder="Ketik ulang password"
                                class="block w-full pl-14 sm:pl-16 pr-11 sm:pr-12 py-3 sm:py-3.5 text-sm sm:text-base text-gray-900 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-[#017249]/20 focus:border-[#017249] transition-all duration-200 placeholder-gray-400 hover:border-gray-300" />
                            <button type="button" data-toggle-password="password_confirmation"
                                class="absolute inset-y-0 right-0 pr-3 sm:pr-4 flex items-center hover:scale-110 transition-transform duration-200 cursor-pointer" aria-label="Toggle password visibility">
                                <svg id="eye-icon-password_confirmation" class="w-5 h-5 text-gray-400 hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- OTP Method -->
                    <div class="space-y-2">
                        <label class="block text-xs sm:text-sm font-semibold text-gray-700">OTP Method</label>
                        <div class="grid grid-cols-2 gap-3 mt-1">
                            <label class="relative flex items-center gap-2.5 p-3 sm:p-3.5 border-2 rounded-xl cursor-pointer transition-all duration-200 hover:border-[#017249]/40 hover:bg-[#017249]/5 group {{ old('otp_method', 'whatsapp') == 'whatsapp' ? 'border-[#017249] bg-[#017249]/5' : 'border-gray-200' }}">
                                <input type="radio" name="otp_method" value="whatsapp"
                                    class="form-radio text-[#017249] focus:ring-[#017249] shrink-0" {{ old('otp_method', 'whatsapp') == 'whatsapp' ? 'checked' : '' }}>
                                <div class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4 text-green-600 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                                        <path d="M12 2C6.478 2 2 6.478 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.522 0 10-4.478 10-10S17.522 2 12 2zm0 18a7.96 7.96 0 01-4.29-1.248l-.308-.184-2.87.852.852-2.87-.184-.308A7.96 7.96 0 014 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"/>
                                    </svg>
                                    <span class="text-xs sm:text-sm font-medium text-gray-700 group-hover:text-gray-900 transition-colors">WhatsApp</span>
                                </div>
                            </label>
                            <label class="relative flex items-center gap-2.5 p-3 sm:p-3.5 border-2 rounded-xl cursor-pointer transition-all duration-200 hover:border-[#017249]/40 hover:bg-[#017249]/5 group {{ old('otp_method') == 'email' ? 'border-[#017249] bg-[#017249]/5' : 'border-gray-200' }}">
                                <input type="radio" name="otp_method" value="email"
                                    class="form-radio text-[#017249] focus:ring-[#017249] shrink-0" {{ old('otp_method') == 'email' ? 'checked' : '' }}>
                                <div class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4 text-[#017249] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span class="text-xs sm:text-sm font-medium text-gray-700 group-hover:text-gray-900 transition-colors">Email</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-[#017249] to-[#015a3a] hover:from-[#015a3a] hover:to-[#014d35] text-white text-sm sm:text-base font-semibold py-3 sm:py-3.5 px-4 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-[#017249]/30 flex items-center justify-center gap-2 group cursor-pointer mt-6">
                        <span>Daftar & Kirim OTP</span>
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform duration-200"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </button>
                </form>

                <!-- Login Link -->
                <div class="text-center pt-3 sm:pt-4 pb-2">
                    <div class="inline-flex flex-wrap items-center justify-center gap-1 text-xs sm:text-sm">
                        <span class="text-gray-600">Sudah punya akun?</span>
                        <a href="{{ route('login') }}"
                            class="font-semibold text-[#017249] hover:text-[#015a3a] transition-all duration-200 hover:underline inline-flex items-center gap-1 group">
                            <span>Log in sekarang</span>
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 group-hover:translate-x-1 transition-transform duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Password Strength Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const strengthBar = document.getElementById('strength-bar');
            const strengthText = document.getElementById('strength-text');
            const strengthPercent = document.getElementById('strength-percent');

            if (passwordInput) {
                passwordInput.addEventListener('input', function() {
                    const val = this.value;
                    let score = 0;

                    if (!val) {
                        strengthBar.style.width = '0%';
                        strengthBar.className = 'bg-gray-300 h-1.5 rounded-full transition-all duration-300 ease-out';
                        strengthText.textContent = 'Belum diisi';
                        strengthText.className = 'text-gray-400 font-normal';
                        strengthPercent.textContent = '0%';
                        return;
                    }

                    // Calculate score based on criteria
                    if (val.length >= 8) score += 20;
                    if (/[A-Z]/.test(val)) score += 20;
                    if (/[a-z]/.test(val)) score += 20;
                    if (/[0-9]/.test(val)) score += 20;
                    if (/[^A-Za-z0-9]/.test(val)) score += 20;

                    // Update width and text
                    strengthBar.style.width = score + '%';
                    strengthPercent.textContent = score + '%';

                    // Determine color and label
                    let colorClass = '';
                    let label = '';
                    let labelColor = '';

                    if (score <= 25) {
                        label = 'Lemah';
                        colorClass = 'bg-red-500';
                        labelColor = 'text-red-600';
                    } else if (score <= 50) {
                        label = 'Sedang';
                        colorClass = 'bg-orange-500';
                        labelColor = 'text-orange-600';
                    } else if (score <= 75) {
                        label = 'Cukup Kuat';
                        colorClass = 'bg-yellow-500';
                        labelColor = 'text-yellow-600';
                    } else {
                        label = 'Sangat Kuat';
                        colorClass = 'bg-green-500';
                        labelColor = 'text-green-600';
                    }

                    strengthBar.className = colorClass + ' h-1.5 rounded-full transition-all duration-300 ease-out';
                    strengthText.textContent = label;
                    strengthText.className = labelColor + ' font-semibold ml-1';
                });
            }
        });
    </script>
</x-layouts.auth>
