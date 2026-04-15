<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            "AdminName" => fake()->name,
            "UserName" => "admin",
            "MobileNumber" => fake()->phoneNumber(),
            "Email" => fake()->safeEmail(),

            // Hash::make() uses bcrypt - much more secure
            "Password" => Hash::make('admin123'),
            "AdminRegDate" => fake()->date(),
            "remember_token" => Str::random(10)
        ]);

        $this->command->info('Admin Created!');
    }
}
