<?php

namespace App\Http\Controllers;

use App\Models\TablePage;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function home()
    {
        $tblPages = TablePage::all();
        $Employers = DB::table('table_employees')->inRandomOrder()->limit('8')->get();
        return view('index', compact('tblPages', 'Employers'));
    }
}
