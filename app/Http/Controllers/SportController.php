<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportController extends Controller
{
    //
    // SportController.php
    public function index()
    {
        return view('pages.sport');
    }
}
