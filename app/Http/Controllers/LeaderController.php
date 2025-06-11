<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaderController extends Controller
{
     public function index()
    {
        return view('leader');
    }
}
