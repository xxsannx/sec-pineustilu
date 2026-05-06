<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi OTP</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md text-center">
        <h2 class="text-2xl font-bold mb-2">Verifikasi OTP</h2>
        @if(session('verify_otp_method') === 'email')
            <p class="text-gray-600 mb-6 text-sm">Kode 6 digit telah dikirimkan ke Email Anda: <strong>{{ session('verify_email') }}</strong></p>
        @else
            <p class="text-gray-600 mb-6 text-sm">Kode 6 digit telah dikirimkan ke WhatsApp Anda: <strong>{{ session('verify_phone') }}</strong></p>
        @endif
        
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 text-left">
                <ul class="list-disc pl-5 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('warning'))
            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative mb-4 text-left">
                <p class="text-sm font-medium">{{ session('warning') }}</p>
            </div>
        @endif

        <form action="{{ route('otp.verify') }}" method="POST">
            @csrf
            <input type="hidden" name="phone" id="phone" value="{{ session('verify_phone') }}">
            <input type="hidden" id="otp_method" value="{{ session('verify_otp_method', 'whatsapp') }}">
            
            <div class="mb-6">
                <input type="text" name="otp" required maxlength="6" pattern="\d{6}" placeholder="######"
                    class="shadow appearance-none border rounded w-full py-4 px-3 text-center text-3xl tracking-[1em] text-gray-700 leading-tight focus:outline-none focus:shadow-outline font-mono">
            </div>

            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-4 rounded focus:outline-none focus:shadow-outline w-full mb-4">
                Verifikasi
            </button>
        </form>

        <div class="mt-4 text-sm text-gray-600 border-t pt-4">
            <p>Belum menerima kode OTP?</p>
            <button id="resendBtn" onclick="resendOtp()" class="text-blue-500 font-bold hover:underline mt-2">
                Kirim Ulang Kode
            </button>
            <p id="resendMessage" class="hidden text-xs mt-2"></p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Automatically start the 60-second countdown when the page loads
            startCooldown(60);
        });

        function startCooldown(seconds) {
            const btn = document.getElementById('resendBtn');
            btn.disabled = true;
            btn.classList.add('opacity-50', 'cursor-not-allowed');
            btn.innerText = `Tunggu ${seconds} detik`;
            
            const interval = setInterval(() => {
                seconds--;
                btn.innerText = `Tunggu ${seconds} detik`;
                if (seconds <= 0) {
                    clearInterval(interval);
                    btn.disabled = false;
                    btn.classList.remove('opacity-50', 'cursor-not-allowed');
                    btn.innerText = 'Kirim Ulang Kode';
                }
            }, 1000);
        }

        function resendOtp(fallbackMethod = null) {
            const btn = document.getElementById('resendBtn');
            const msg = document.getElementById('resendMessage');
            const phone = document.getElementById('phone').value;
            const fallbackContainer = document.getElementById('fallbackContainer');
            
            let method = document.getElementById('otp_method').value;
            if (fallbackMethod) {
                method = fallbackMethod;
                document.getElementById('otp_method').value = method;
            }
            
            const csrfTkn = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            btn.disabled = true;
            btn.innerText = 'Mengirim...';
            msg.classList.add('hidden');
            if(fallbackContainer) fallbackContainer.classList.add('hidden');

            fetch('{{ route("otp.resend") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfTkn,
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ phone: phone, method: method })
            })
            .then(response => response.json().then(data => ({status: response.status, body: data})))
            .then(res => {
                msg.classList.remove('hidden');
                if (res.status === 200) {
                    msg.className = "text-xs mt-2 text-green-600";
                    msg.innerText = res.body.message;
                    
                    // Start cooldown UI
                    startCooldown(60);
                } else {
                    msg.className = "text-xs mt-2 text-red-600";
                    msg.innerText = res.body.message || "Gagal mengirim ulang";
                    btn.disabled = false;
                    btn.innerText = 'Kirim Ulang Kode';

                    if (res.body.suggest_email) {
                        if(!document.getElementById('fallbackContainerEmail')) {
                            const container = document.createElement('div');
                            container.id = 'fallbackContainerEmail';
                            container.className = 'mt-3';
                            container.innerHTML = `<button type="button" onclick="resendOtp('email')" class="text-sm text-white bg-gray-600 hover:bg-gray-700 font-semibold py-2 px-4 rounded shadow w-full">Coba verifikasi melalui Email</button>`;
                            document.querySelector('.mt-4.text-sm.text-gray-600').appendChild(container);
                        } else {
                            document.getElementById('fallbackContainerEmail').classList.remove('hidden');
                        }
                    }

                    if (res.body.suggest_whatsapp) {
                        if(!document.getElementById('fallbackContainerWa')) {
                            const container = document.createElement('div');
                            container.id = 'fallbackContainerWa';
                            container.className = 'mt-3';
                            container.innerHTML = `<button type="button" onclick="resendOtp('whatsapp')" class="text-sm text-white bg-green-600 hover:bg-green-700 font-semibold py-2 px-4 rounded shadow w-full">Coba verifikasi melalui WhatsApp</button>`;
                            document.querySelector('.mt-4.text-sm.text-gray-600').appendChild(container);
                        } else {
                            document.getElementById('fallbackContainerWa').classList.remove('hidden');
                        }
                    }
                }
            })
            .catch(err => {
                btn.disabled = false;
                btn.innerText = 'Kirim Ulang Kode';
                msg.classList.remove('hidden');
                msg.className = "text-xs mt-2 text-red-600";
                msg.innerText = 'Terjadi kesalahan sistem.';
            });
        }
    </script>
</body>
</html>
