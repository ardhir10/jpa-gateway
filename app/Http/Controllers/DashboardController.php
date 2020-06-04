<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $title = 'Dashboard';
        $page_title = 'Dashboard';
        return view('dashboard',compact('page_title', 'title'));
    }
}
