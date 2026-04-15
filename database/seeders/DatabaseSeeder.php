<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        /* 1. This is the first Method */
        // $this->call(EmployeeSeeder::class);
        // $this->call(DepartmentSeeder::class);


        /* 2. This is the second Method */


        /* 3. Hint for the Cloud AI method */
        // $this->call(EmployeeSeeder::class);


        /* 4. FAQ Seeder */
        $this->call(FaqSeeder::class);
    }
}
