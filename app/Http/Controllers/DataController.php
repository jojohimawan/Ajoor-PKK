<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function uikit()
    {
        $data = Product::where('category_id', 1)->paginate(3);
        $title = '| UI Kit';
        $category = 'UI Kit';
        return view('pages.category.index', compact('data', 'title', 'category'));
    }

    public function template()
    {
        $data = Product::where('category_id', 2)->paginate(3);
        $title = '| Template';
        $category = 'Template';
        return view('pages.category.index', compact('data', 'title', 'category'));
    }

    public function iconset()
    {
        $data = Product::where('category_id', 5)->paginate(3);
        $title = '| Icon Set';
        $category = 'Icon Set';
        return view('pages.category.index', compact('data', 'title', 'category'));
    }

    public function ilustrasi()
    {
        $data = Product::where('category_id', 7)->paginate(3);
        $title = '| Ilustrasi';
        $category = 'Ilustrasi';
        return view('pages.category.index', compact('data', 'title', 'category'));
    }

    public function detail($id)
    {
        $data = Product::find($id);
        $title = '| Detail Page';
        return view('pages.category.detail', compact('data', 'title'));
    }
}
