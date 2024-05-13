<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'pages' => 'Dashboard'
        ];
        return view('dashboard.index', compact('data'));
    }
}

// test pull request
