<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (isset(Auth::user()->role_id)) {
            if (Auth::user()->role_id == 1) {
                return view('admin.dashboard', [
                    'title' => 'Dashboard',
                ]);
            }
        }
        $getProduct = Product::limit(3)->latest()->get();
        $categories = Category::all();

        return view('pages.home', [
            'title' => '',
        ])->with(compact('getProduct', 'categories'));
    }
}
