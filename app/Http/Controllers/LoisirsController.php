<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoisirActivity;

class LoisirsController extends Controller
{
    //
    // LoisirsController.php
    public function index()
    {
        $events = LoisirActivity::paginate(6);
        return view('pages.loisir', compact('events'));

    }
}
