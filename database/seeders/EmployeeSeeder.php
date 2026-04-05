<?php

namespace Database\Seeders;

use App\Models\TableEmployee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('table_employees')->insert([
        //     'DepartmentID' => '1',
        //     'EmpId' => '1',
        //     'EmpName' => 'John Doe',
        //     'EmpEmail' => 'john@example.com',
        //     'Gender' => 'Male',
        //     'EmpContactNumber' => '7865896547',
        //     'Designation' => 'Web Designer',
        //     'EmpAddress' => 'Noida',
        //     'Description' => 'The best employee',
        //     'Password' => '12345678',

        // ]);


        // Generate 30 random male employees
        TableEmployee::factory()->count(30)->male()->create();

        // Generate 30 random female employees
        TableEmployee::factory()->count(30)->female()->create();

        // Generate 10 engineers
        TableEmployee::factory()->count(10)->designation('Software Engineer')->create();

        // Generate 10 Manager
        TableEmployee::factory()->count(10)->designation('Project Manager')->create();
    }
}
