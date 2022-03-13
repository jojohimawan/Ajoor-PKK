<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function uikit()
    {
        $data = Product::where('category_id', 1)->paginate(3);
        $title = 'UI Kit';
        return view('pages.category.index', compact('data', 'title'));
    }

    public function template()
    {
        $data = Product::where('category_id', 2)->paginate(3);
        $title = 'Template';
        return view('pages.category.index', compact('data', 'title'));
    }

    public function iconset()
    {
        $data = Product::where('category_id', 5)->paginate(3);
        $title = 'Icon Set';
        return view('pages.category.index', compact('data', 'title'));
    }

    public function ilustrasi()
    {
        $data = Product::where('category_id', 7)->paginate(3);
        $title = 'Ilustrasi';
        return view('pages.category.index', compact('data', 'title'));
    }

    public function detail($id)
    {
        $data = Product::find($id);
        $title = 'Detail Page';
        return view('pages.category.detail', compact('data', 'title'));
    }

    public function success($id)
    {
        $data = Product::find($id);
        $title = 'Success Checkout';
        return view('pages.category.success_checkout', compact('data', 'title'));
    }
}
