<?php

namespace App\Http\Controllers;

use App\Models\TablePage;

class MainController extends Controller
{
    public function home()
    {
        $tblPages = TablePage::all();
        return view('index', compact('tblPages'));
    }
}
