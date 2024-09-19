<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpController extends Controller
{
    /**
     * Display Welcome home page.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Display PHP page.
     */
    public function show(String $name)
    {
        return view('php.' . $name);
    }
}
