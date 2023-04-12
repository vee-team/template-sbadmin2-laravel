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

    // Components
    public function buttons()
    {
        $menu = 'Buttons';
        return view('pages.components.buttons', compact('menu'));
    }

    public function cards()
    {
        $menu = 'Cards';
        return view('pages.components.cards', compact('menu'));
    }

    // Utilities
    public function utilities_color()
    {
        $menu = 'Utilities Color';
        return view('pages.utilities.color', compact('menu'));
    }

    public function utilities_border()
    {
        $menu = 'Utilities Border';
        return view('pages.utilities.border', compact('menu'));
    }

    public function utilities_animation()
    {
        $menu = 'Utilities Animation';
        return view('pages.utilities.animation', compact('menu'));
    }

    public function utilities_other()
    {
        $menu = 'Utilities Other';
        return view('pages.utilities.other', compact('menu'));
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
