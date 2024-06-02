<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdminRegistration>
 */
class AdminRegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
	 
	protected static ?string $admin_password;
	protected static ?string $admin_confirm_password;
	 
    public function definition(): array
    {
        return [
            'admin_password' => static::$admin_password ??= Hash::make('admin_password'),
            'admin_confirm_password' => static::$admin_confirm_password ??= Hash::make('admin_confirm_password'),
        ];
    }
}
