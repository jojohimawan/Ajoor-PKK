<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getProduct = Product::get();
        $categories = Category::all();

        return view('admin.product', [
            'title' => 'Product',
        ])->with(compact('getProduct', 'categories'));
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
        $data = $request->validate([
            'name' => 'required|unique:products',
            'description' => 'required',
            'type' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'category_id' => 'required',
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = uniqid() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }

        if ($image2 = $request->file('image2')) {
            $destinationPath = 'image/';
            $profileImage = uniqid() . "." . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $profileImage);
            $data['image2'] = "$profileImage";
        }

        if ($image3 = $request->file('image3')) {
            $destinationPath = 'image/';
            $profileImage = uniqid() . "." . $image3->getClientOriginalExtension();
            $image3->move($destinationPath, $profileImage);
            $data['image3'] = "$profileImage";
        }

        $data['price'] = $data['type'] == 2 ? $request->price : 0;
        Product::create($data);

        return redirect()->route('user.product')->with('success', 'Data berhasil ditambahkan!');
    }

    public function delete()
    {
        Product::Where('id', request('productid'))->delete();

        return redirect()->route('user.product')->with('success', 'Data berhasil dihapus!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'type' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            // 'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            // 'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'category_id' => 'required',
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = uniqid() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }

        if ($image2 = $request->file('image2')) {
            $destinationPath = 'image/';
            $profileImage = uniqid() . "." . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $profileImage);
            $data['image2'] = "$profileImage";
        }

        if ($image3 = $request->file('image3')) {
            $destinationPath = 'image/';
            $profileImage = uniqid() . "." . $image3->getClientOriginalExtension();
            $image3->move($destinationPath, $profileImage);
            $data['image3'] = "$profileImage";
        }

        $data['price'] = $data['type'] == 2 ? $request->price : 0;
        Product::Where('id', request('productid'))->update($data);

        return redirect()->route('user.product')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
