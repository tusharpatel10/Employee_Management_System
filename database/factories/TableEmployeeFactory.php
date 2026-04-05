<?php

namespace Database\Factories;

use App\Models\TableDepartment;
use App\Models\TableEmployee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<TableEmployee>
 */
class TableEmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Designation List
        $designations = [
            'Software Engineer',
            'Senior Software Engineer',
            'Frontend Developer',
            'Backend Developer',
            'Full Stack Developer',
            'UI/UX Designer',
            'Project Manager',
            'HR Manager',
            'Business Analyst',
            'QA Engineer',
            'DevOps Engineer',
            'Data Analyst',
            'Marketing Manager',
            'Sales Executive',
            'Accountant',
            'Team Lead',
            'Product Manager',
            'Database Administrator',
            'Network Engineer',
            'System Administrator'
        ];

        $gender = fake()->randomElement(['Male', 'Female', 'Other']);

        // Generate gender-specific name
        $firstName = match ($gender) {
            'Male' => fake()->firstName('male'),
            'Female' => fake()->firstName('female'),
            'Other' => fake()->firstName(),
            default => fake()->firstName()
        };

        $lastName = fake()->lastName();
        $empName = $firstName . ' ' . $lastName;
        return [
            'DepartmentID' => TableDepartment::inRandomOrder()->first()?->id ?? 1,
            'EmpId' => 'EMP-' . strtoupper(Str::random(3)) . '-' . fake()->numberBetween(1000, 9999),
            'EmpName' => $empName,
            'EmpEmail' => strtolower($firstName . '.' . $lastName . '@' . fake()->domainName()),
            'EmpContactNumber' => fake()->phoneNumber(),
            'Designation' => fake()->randomElement($designations),
            'EmpDateOfBirth' => fake()->date(),
            'EmpAddress' => fake()->streetAddress() . ', ' . fake()->city() . ', ' . fake()->state() . ' ' . fake()->postcode(),
            'EmpDateofjoining' => fake()->date(),
            'Description' => fake()->paragraph(3),
            'Password' => Hash::make('password123')
        ];
    }
    // State - Male Employee only
    public function male(): static
    {
        return $this->state(fn(array $attributes) => [
            'Gender' => 'Male',
            'EmpName' => fake()->firstName('male') . ' ' . fake()->lastName()
        ]);
    }
    // State - Female Employee only
    public function female(): static
    {
        return $this->state(fn(array $attributes) => [
            'Gender' => 'Female',
            'EmpName' => fake()->firstName('female') . ' ' . fake()->lastName()
        ]);
    }
    // State - Specific designation
    public function designation(): static
    {
        return $this->state(fn(array $attributes) => [
            'Designation' => 'designation',
        ]);
    }
    // State - Specific department
    public function department(): static
    {
        return $this->state(fn(array $attributes) => [
            'Department' => 'department',
        ]);
    }
}
