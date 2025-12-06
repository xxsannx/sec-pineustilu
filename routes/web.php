<?php

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

Route::view('/barang-tambahan', 'barang-tambahan')->name('barang-tambahan');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('profile.edit');
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
