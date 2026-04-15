<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                "question" => "What is the Employee Management System (EMS)?",
                "answer" => "The Employee Management System is a digital platform used to manage employee data, tasks, attendance, leaves, performance, and more, all in one place.\r\nedfeede\r\n"
            ],
            [
                "question" => "How do I log in to the System?",
                "answer" => "Use your registered email or username and password to log in. If you\'re an admin, use the admin login panel."
            ],
            [
                "question" => "How can I update my personal details?",
                "answer" => "Go to your profile section after logging in and click on \'Edit Profile\' to update your contact information, address, etc."
            ],
            [
                "question" => "How can I apply for leave?",
                "answer" => "Navigate to the \\'Leave Request\' section, select your leave type, dates, and reason, then click \'Submit.\' You’ll be notified once it\'s approved."
            ],
            [
                "question" => "How can I see my assigned tasks?",
                "answer" => "Click on the '\Tasks' or \'My Tasks\' tab from the dashboard to view tasks assigned to you along with deadlines and priority."
            ]
        ];


        foreach ($faqs as $faq) {
            Faq::create([
                "question" => $faq["question"],
                "answer" => $faq["answer"],
                "created_at" => fake()->time(),
                "updated_at" => fake()->time()
            ]);
        }
    }
}
