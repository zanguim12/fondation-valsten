<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventsActivities;

class LoisirsController extends Controller
{
    //
    // LoisirsController.php
    public function index()
    {
        $events = EventsActivities::paginate(6);
        return view('pages.loisir', compact('events'));

    }
}
