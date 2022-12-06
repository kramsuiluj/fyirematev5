<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('administrators.locations.create');
    }
}
