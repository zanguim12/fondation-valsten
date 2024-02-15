<?php

namespace App\Http\Controllers;

use App\Models\VillageArtsActivity;
use Illuminate\Http\Request;

class VillageArtsController extends Controller
{
    //
    // VillageArtsController.php
    public function index()
    {
        $events = VillageArtsActivity::paginate(6);
        return view('pages.village_arts', compact('events'));
        
    }
}
