<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function __construct()
    {
        // if (!Auth::user() ||  Auth::user()->role_id != 1) redirect('/');
    }


    public function index()
    {
        return view('admin.dashboard', [
            'title' => 'Admin',
        ]);
    }

    // public function index()
    // {
    //     return view('admin.dashboard', [
    //         'title' => '| admin',
    //     ]);
    // }


}
