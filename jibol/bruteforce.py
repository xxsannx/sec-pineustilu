import requests
import time
from datetime import datetime

url = "http://127.0.0.1:8000/login"

# Daftar password untuk diuji (10 percobaan)
passwords = [
    "123456",
    "password",
    "admin123",
    "qwerty",
    "admin",
    "password123",
    "root",
    "12345678",
    "Jibol@123",
    "PineusTilu2024"
]

email = "alfaiz1002@gmail.com"

print("=" * 60)
print("    BRUTE FORCE SECURITY TESTING")
print("=" * 60)
print(f"Target URL   : {url}")
print(f"Target Email : {email}")
print(f"Jumlah Uji   : {len(passwords)} password")
print(f"Waktu Mulai  : {datetime.now().strftime('%Y-%m-%d %H:%M:%S')}")
print("=" * 60)
print()

success = False
for i, pwd in enumerate(passwords, 1):
    data = {
        "email": email,
        "password": pwd
    }
    
    try:
        print(f"[{i:2d}/{len(passwords)}] Mencoba: {pwd}", end=" ")
        
        response = requests.post(url, data=data, timeout=5)
        
        # Cek apakah login berhasil (dashboard muncul)
        if "dashboard" in response.text.lower() or "logout" in response.text.lower():
            print("✅ BERHASIL!")
            print()
            print("=" * 60)
            print(f"✓ PASSWORD DITEMUKAN: {pwd}")
            print("=" * 60)
            success = True
            break
        else:
            print("❌ Gagal")
            
            # Jika rate limit terdeteksi
            if response.status_code == 429:
                print(f"    ⚠️ Rate limit terdeteksi! Server memblokir percobaan.")
                break
        
        time.sleep(0.5)  # Jeda 0.5 detik
        
    except requests.exceptions.ConnectionError:
        print("❌ ERROR: Server tidak merespon. Pastikan server berjalan.")
        break
    except Exception as e:
        print(f"❌ ERROR: {e}")

print()
print("=" * 60)
print(f"Waktu Selesai: {datetime.now().strftime('%Y-%m-%d %H:%M:%S')}")

if success:
    print("STATUS: ⚠️  Keamanan RENDAH - Brute Force BERHASIL!")
    print("SARAN: Terapkan rate limiting dan captcha!")
else:
    print("STATUS: ✅ Keamanan BAIK - Brute Force GAGAL!")
    print("INFO: Tidak ada password yang berhasil ditemukan.")

print("=" * 60)