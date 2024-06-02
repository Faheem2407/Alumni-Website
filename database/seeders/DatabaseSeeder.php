<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\AdminRegistration;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
		AdminRegistration::factory()->create([
			'admin_name'=>'superadmin',
			'admin_email'=>'superadmin@gmail.com',
			'admin_password'=>'superadmin',
			'admin_confirm_password'=>'superadmin',
			'department'=>'superadmin',
		]);
    }
}
