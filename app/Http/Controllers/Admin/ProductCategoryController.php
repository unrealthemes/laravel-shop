<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = ProductCategory::orderBy('created_at', 'desc')->get();

      return view('admin.product_category.index', [
          'categories' => $categories
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $new_category = new ProductCategory();
      $new_category->title = $request->title;
      $new_category->save();

      return redirect()->back()->withSuccess('Category was added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $product_category
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $product_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $product_category
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $product_category)
    {
      return view('admin.product_category.edit', [
          'category' => $product_category
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductCategory  $product_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $product_category)
    {
      $product_category->title = $request->title;
      $product_category->save();

      return redirect()->back()->withSuccess('Category has been successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $product_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $product_category)
    {
      $product_category->delete();
      return redirect()->back()->withSuccess('Category has been successfully deleted!');
    }
}
