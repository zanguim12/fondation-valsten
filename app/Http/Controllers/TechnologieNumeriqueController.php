<?php

namespace App\Http\Controllers;

use App\Models\TechnologyNumericActivity;
use Illuminate\Http\Request;

class TechnologieNumeriqueController extends Controller
{
    //
    // TechnologieNumeriqueController.php
    public function index()
    {
        $events = TechnologyNumericActivity::paginate(6);
        return view('pages.technologie_numerique', compact('events'));
    }
}
