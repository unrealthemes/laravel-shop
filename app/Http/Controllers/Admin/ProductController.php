<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\Product;
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
      $products = Product::orderBy('created_at', 'DESC')->get();

      return view('admin.product.index', [
          'products' => $products
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = ProductCategory::orderBy('created_at', 'DESC')->get();

      return view('admin.product.create', [
          'categories' => $categories
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $product = new Product();
      $product->title = $request->title;
      $product->slug = $request->slug;
      $product->img = $request->img;
      $product->price = $request->price;
      $product->new_price = $request->new_price;
      $product->in_stock = ( $request->in_stock ) ? 1 : 0;
      $product->description = $request->description;
      $product->category_id = $request->category_id;
      $product->save();

      return redirect()->back()->withSuccess('The product has been successfully added!');
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
      $categories = ProductCategory::orderBy('created_at', 'DESC')->get();

      return view('admin.product.edit', [
          'categories'  => $categories,
          'product'     => $product,
      ]);
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
        $product->title = $request->title;
        $product->slug = $request->slug;
        $product->img = $request->img;
        $product->price = $request->price;
        $product->new_price = $request->new_price;
        $product->in_stock = ( $request->in_stock ) ? 1 : 0;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect()->back()->withSuccess('The product has been successfully added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->withSuccess('The product has been successfully deleted!');
    }
}
