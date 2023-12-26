<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // gawa ka na model ng skills, portfolio, etc
        // then lagay mo dito yung logic
        // then display mo
        // wag mo kalimutan yung auth para ikaw lang ang makaka-access
        // remove mo yung register para di makagawa iba accidentally
        return view('welcome');
    }
}
