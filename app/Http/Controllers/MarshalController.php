<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarshalController extends Controller
{
    public function index()
    {
        return view('administrators.marshals.index');
    }

    public function create()
    {
        return view('administrators.marshals.create');
    }
}
