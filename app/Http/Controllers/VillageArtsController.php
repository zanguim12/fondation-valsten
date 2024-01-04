<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VillageArtsController extends Controller
{
    //
    // VillageArtsController.php
    public function index()
    {
        return view('village_arts.index');
    }
}
