<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        // Remove leading zero from phone if exists
        if (isset($input['phone']) && str_starts_with($input['phone'], '0')) {
            $input['phone'] = ltrim($input['phone'], '0');
        }

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'country_code' => ['required', 'string', 'max:5'],
            'phone' => ['required', 'string', 'min:8', 'max:13', 'regex:/^[0-9]+$/'],
            'password' => $this->passwordRules(),
        ], [
            'name.required' => 'Nama lengkap wajib diisi.',
            'name.max' => 'Nama maksimal 255 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'country_code.required' => 'Kode negara wajib dipilih.',
            'phone.required' => 'Nomor telepon wajib diisi.',
            'phone.min' => 'Nomor telepon minimal 8 digit.',
            'phone.max' => 'Nomor telepon maksimal 13 digit.',
            'phone.regex' => 'Nomor telepon hanya boleh berisi angka.',
            'password.required' => 'Password wajib diisi.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'country_code' => $input['country_code'],
            'phone' => $input['phone'],
            'password' => $input['password'],
        ]);

        // Assign user role to new registered user
        $user->assignRole('user');

        return $user;
    }
}
