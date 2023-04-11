<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $menu = 'Dashboard';
        return view('pages.index', compact('menu'));
    }

    public function charts()
    {
        $menu = 'Charts';
        return view('pages.charts', compact('menu'));
    }

    public function tables()
    {
        $menu = 'Tables';
        return view('pages.tables', compact('menu'));
    }
}
