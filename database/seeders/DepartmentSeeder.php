<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\TableDepartment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            'Logistics',
            'Technical',
            'Accounts',
            'Testing',
            'IT Department',
            'UI/UX Designer',
            'CyberSecurity',
            'HR',
            'Engineering',
            'Marketing',
            'Sales',
            'Operations',
            'Legal',
            'Administration'
        ];


        // Insert each department as a seperate row
        foreach ($departments as $department) {
            TableDepartment::create([
                'DepartmentName' => $department,
                'CreateDate' => fake()->date()
            ]);
        }
    }
}
