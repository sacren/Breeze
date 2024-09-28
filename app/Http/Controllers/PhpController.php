<?php

namespace App\Http\Controllers;

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
        $page = 'php.' . $name;

        if (view()->exists($page)) {
            return view($page);
        }

        abort(404);
    }
}
