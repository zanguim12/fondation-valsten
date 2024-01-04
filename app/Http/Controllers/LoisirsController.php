<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoisirsController extends Controller
{
    //
    // LoisirsController.php
    public function index()
    {
        return view('loisirs.index');
    }
}
