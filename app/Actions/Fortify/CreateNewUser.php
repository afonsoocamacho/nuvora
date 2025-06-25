<?php

namespace App\Actions\Fortify;

use App\Models\Organization;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): Organization
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(Organization::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return Organization::create([
            'name' => $input['name'],
            'slug' => Str::slug($input['name']),
            'type' => 'company', // Default type, can be changed later
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
