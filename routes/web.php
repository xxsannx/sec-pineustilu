<?php

use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\ItemController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::view('/cerita', 'cerita')->name('cerita');

Route::view('/', 'dashboard')->name('home');

Route::view('dashboard', 'dashboard')
    ->name('dashboard');

Route::view('/area/pineus-tilu-1', 'area.pineus-tilu-1')->name('area.pineus-tilu-1');
Route::view('/area/pineus-tilu-2', 'area.pineus-tilu-2')->name('area.pineus-tilu-2');
Route::view('/area/pineus-tilu-3-vip', 'area.pineus-tilu-3-vip')->name('area.pineus-tilu-3-vip');
Route::view('/area/pineus-tilu-4', 'area.pineus-tilu-4')->name('area.pineus-tilu-4');
Route::view('/area/pineus-tilu-cabin', 'area.pineus-tilu-cabin')->name('area.pineus-tilu-cabin');

Route::view('/aktivitas', 'aktivitas')->name('aktivitas');

Route::view('/pedoman', 'pedoman')->name('pedoman');

Route::view('/morikafe', 'morikafe')->name('morikafe');

Route::view('/faq', 'faq')->name('faq');

Route::view('/reservasi/glamping', 'reservasi.reservasi-glamping')->name('reservasi.glamping');
Route::view('/reservasi/outbound', 'reservasi.reservasi-outbound')->name('reservasi.outbound');

Route::get('/barang-tambahan', [ItemController::class, 'index'])->name('barang-tambahan');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    // Profile with dynamic tabs
    Route::get('settings/profile/{tab?}', function ($tab = 'profile') {
        // Validate tab
        $validTabs = ['profile', 'bookings', 'reschedule', 'cancellation'];
        if (!in_array($tab, $validTabs)) {
            abort(404);
        }

        // Initialize data array
        $data = ['currentTab' => $tab];
        
        // Get data based on tab
        switch ($tab) {
            case 'bookings':
                // TODO: Replace with actual database query
                // $data['bookings'] = auth()->user()->bookings()->latest()->get();
                $data['bookings'] = collect([
                    (object)[
                        'id' => 'BK-001',
                        'area' => 'Pineus Tilu 1',
                        'area_type' => 'Glamping',
                        'deck' => 'Deck 1',
                        'check_in' => '2024-12-15',
                        'check_out' => '2024-12-17',
                        'guests' => 5,
                        'total' => 500000,
                        'status' => 'confirmed',
                        'created_at' => now()->subDays(5),
                    ],
                    (object)[
                        'id' => 'BK-002',
                        'area' => 'Arung Jeram',
                        'area_type' => 'Outbound',
                        'outbound' => 'Arung Jeram',
                        'check_in' => '2024-12-20',
                        'check_out' => '2024-12-21',
                        'guests' => 5,
                        'total' => 550000,
                        'status' => 'pending',
                        'created_at' => now()->subDays(2),
                    ],
                    (object)[
                        'id' => 'BK-003',
                        'area' => 'Pineus Tilu 2',
                        'area_type' => 'Glamping',
                        'deck' => 'Deck 2',
                        'check_in' => '2024-12-25',
                        'check_out' => '2024-12-27',
                        'guests' => 5,
                        'total' => 750000,
                        'status' => 'failed',
                        'created_at' => now()->subDays(1),
                    ],
                ]);
                break;
                
            case 'reschedule':
                // TODO: Replace with actual database query
                // $data['reschedules'] = auth()->user()->reschedules()->latest()->get();
                $data['reschedules'] = collect([
                    (object)[
                        'id' => 'BK-004',
                        'area' => 'Pineus Tilu 1',
                        'area_type' => 'Glamping',
                        'deck' => 'Deck 1',
                        'old_check_in' => '2024-12-10',
                        'new_check_in' => '2024-12-25',
                        'old_check_out' => '2024-12-12',
                        'new_check_out' => '2024-12-27',
                        'guests' => 5,
                        'total' => 500000,
                        'status' => 'rescheduled',
                        'created_at' => now()->subDays(3),
                    ],
                    (object)[
                        'id' => 'BK-005',
                        'area' => 'Arung Jeram',
                        'area_type' => 'Outbound',
                        'outbound' => 'Arung Jeram',
                        'old_check_in' => '2024-12-08',
                        'new_check_in' => '2024-12-22',
                        'old_check_out' => '2024-12-09',
                        'new_check_out' => '2024-12-23',
                        'guests' => 10,
                        'total' => 1000000,
                        'status' => 'rescheduled',
                        'created_at' => now()->subDays(5),
                    ],
                ]);
                break;
                
            case 'cancellation':
                // TODO: Replace with actual database query
                // $data['cancellations'] = auth()->user()->cancellations()->latest()->get();
                $data['cancellations'] = collect([
                    (object)[
                        'id' => 'BK-006',
                        'area' => 'Pineus Tilu 1',
                        'area_type' => 'Glamping',
                        'deck' => 'Deck 1',
                        'check_in' => '2024-12-08',
                        'check_out' => '2024-12-10',
                        'guests' => 5,
                        'total' => 500000,
                        'refund' => 500000,
                        'status' => 'cancelled',
                        'cancelled_at' => now()->subDays(7),
                        'reason' => 'Perubahan jadwal mendadak',
                    ],
                    (object)[
                        'id' => 'BK-007',
                        'area' => 'Arung Jeram',
                        'area_type' => 'Outbound',
                        'outbound' => 'Arung Jeram',
                        'check_in' => '2024-11-20',
                        'check_out' => '2024-11-21',
                        'guests' => 8,
                        'total' => 800000,
                        'refund' => 640000,
                        'status' => 'cancelled',
                        'cancelled_at' => now()->subDays(10),
                        'reason' => 'Cuaca buruk',
                    ],
                ]);
                break;
                
            case 'profile':
            default:
                // No additional data needed for profile tab
                break;
        }
        
        return view('profile', $data);
    })->name('profile');
    
    // Profile update
    Route::put('settings/profile', function (Illuminate\Http\Request $request) {
        $user = $request->user();
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'country_code' => 'nullable|string|max:5',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country_code' => $request->country_code ?? $user->country_code,
        ]);

        return back()->with('success', 'Profil berhasil diperbarui!');
    })->name('profile.update');
    
    Route::get('settings/password', Password::class)->name('user-password.edit');
    Route::get('settings/appearance', Appearance::class)->name('appearance.edit');

    Route::get('settings/two-factor', TwoFactor::class)
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

// Google OAuth Routes
Route::get('auth/google', [GoogleAuthController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback'])->name('google.callback');
