<?php

namespace Database\Seeders;

use App\Models\TablePage;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        TablePage::create([
            "PageType" => "aboutus",
            "PageDescription" => "Employee Task Management System\nWelcome to about us page",
        ]);

        TablePage::create([
            "PageType" => "contactus",
            "PageDescription" => "423 silver business hub trade center\nNoida, Delhi.",
            "Email" => "tasksinfo@example.com",
            "MobileNumber" => "1-2392-23928-2",
            "Timing" => "Monday to Friday (9:00am to 5:00pm)"
        ]);
    }
}
