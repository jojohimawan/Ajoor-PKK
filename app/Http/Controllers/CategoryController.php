<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getCategory = Category::get();

        return view('admin.category', [
            'title' => 'Category',
        ])->with(compact('getCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedCategory = $request->validate([
            'name' => 'required|unique:categories',
        ]);

        Category::create($validatedCategory);

        // $request->session()->flash('success', 'Registration successfull! Please login');
        return redirect()->route('category')->with('success', 'Data berhasil ditambahkan!');
    }

    public function delete()
    {
        Category::Where('id', request('categoryid'))->delete();

        return redirect()->route('category')->with('success', 'Data berhasil dihapus!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $validatedCategory)
    {
        $validatedCategory = $request->validate([
            'name' => 'required|unique:categories',
        ]);

        Category::Where('id', request('categoryid'))->update($validatedCategory);

        // $request->session()->flash('success', 'Registration successfull! Please login');
        return redirect()->route('category')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
