<?php

namespace App\Http\Controllers;

use App\Models\SportActivity;
use Illuminate\Http\Request;

class SportController extends Controller
{
    //
    // SportController.php
    public function index()
    {
        $events = SportActivity::paginate(6);
        return view('pages.sport', compact('events'));
        
    }
}
