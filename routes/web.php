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

Route::view('/aktivitas', 'aktivitas')->name('aktivitas');

Route::view('/pedoman', 'pedoman')->name('pedoman');

Route::view('/morikafe', 'morikafe')->name('morikafe');

Route::view('/faq', 'faq')->name('faq');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', function () {
        return view('profile');
    })->name('profile');
    
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
