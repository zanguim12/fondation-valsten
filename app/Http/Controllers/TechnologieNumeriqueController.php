<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechnologieNumeriqueController extends Controller
{
    //
    // TechnologieNumeriqueController.php
    public function index()
    {
        return view('technologie_numerique.index');
    }
}
