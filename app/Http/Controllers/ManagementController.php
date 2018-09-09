<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function home()
    {
        return redirect()->route('manage.dashboard');
    }

    public function dashboard() {
        return view('manage.dashboard');
    }
}
