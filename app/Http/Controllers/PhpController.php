<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

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

        if (View::exists($page)) {
            return View::make($page);
        }

        abort(404);
    }
}
