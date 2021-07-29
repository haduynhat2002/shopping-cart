<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $Product = Product::all();
        return view('shoppingCard.list', ['list'=>$Product]);
    }

    public function create()
    {
        return view('shoppingCard.formProduct', ['data'=>null]);
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->fill($request->all());
        $product->save();
        return redirect('/shopping/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $Product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $Product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $Product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $Product)
    {
        //
    }
}
