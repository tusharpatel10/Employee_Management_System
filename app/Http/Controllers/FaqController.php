<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = DB::table('table_faqs')->get();
        return view('faq-management-system.index', compact('faqs'));
    }
}
