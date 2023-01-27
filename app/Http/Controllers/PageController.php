<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('page.index');
    }

    public function about()
    {
        $team = [
            ['name' => 'Hodor', 'position' => 'programmer'],
            ['name' => 'Joker', 'position' => 'CEO'],
            ['name' => 'Elvis', 'position' => 'CTO'],
        ];

        return view('page.about', ['team' => $team]);
    }
}
