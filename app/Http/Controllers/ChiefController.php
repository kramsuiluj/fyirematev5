<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChiefController extends Controller
{
    public function index()
    {
        return view('administrators.chiefs.index');
    }

    public function create()
    {
        return view('administrators.chiefs.create');
    }
}
