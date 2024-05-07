<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MenuBarController extends Controller
{
    public function __invoke()
    {
        ray(123);
        return Inertia::render('MenuBar');
    }
}
