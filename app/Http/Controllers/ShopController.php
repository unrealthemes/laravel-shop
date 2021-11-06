<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class ShopController extends Controller
{
  public function index( Request $request ) {

    $paginate = 6;
    $categories = ProductCategory::orderBy('title')->withCount('products')->get();
    $products = Product::paginate( $paginate );

    if ( isset( $request->orderBy ) ) {

        if ( $request->orderBy == 'price-low-high' ) {
            $products = Product::orderBy('price')->paginate( $paginate );
        }

        if ( $request->orderBy == 'price-high-low' ) {
            $products = Product::orderBy('price','desc')->paginate( $paginate );
        }

        if ( $request->orderBy == 'name-a-z' ) {
            $products = Product::orderBy('title')->paginate( $paginate );
        }

        if ( $request->orderBy == 'name-z-a' ) {
            $products = Product::orderBy('title','desc')->paginate( $paginate );
        }
    }

    if ( $request->ajax() ) {
        return view('ajax.products-order-by',[
            'products' => $products
        ])->render();
    }

    return view( 'pages.shop', [
        'products'    => $products,
        'categories'  => $categories,
      ] );
  }

  public function getProductsByCategory( Request $request, $slug ) {

    $paginate = 6;
    $current_category = ProductCategory::where( 'slug', $slug )->first();
    $categories = ProductCategory::orderBy('title')->withCount('products')->get();
    $products = $current_category->products()->paginate( $paginate );

    if ( isset( $request->orderBy ) ) {

        if ( $request->orderBy == 'price-low-high' ) {
            $products = $current_category->products()->orderBy('price')->paginate( $paginate );
        }

        if ( $request->orderBy == 'price-high-low' ) {
            $products = $current_category->products()->orderBy('price','desc')->paginate( $paginate );
        }

        if ( $request->orderBy == 'name-a-z' ) {
            $products = $current_category->products()->orderBy('title')->paginate( $paginate );
        }

        if ( $request->orderBy == 'name-z-a' ) {
            $products = $current_category->products()->orderBy('title','desc')->paginate( $paginate );
        }
    }

    if ( $request->ajax() ) {
        return view('ajax.products-order-by',[
            'products' => $products,
        ])->render();
    }

    return view( 'pages.shop', [
        'products'          => $products,
        'categories'        => $categories,
        'current_category'  => $current_category,
      ] );
  }

  public function getProduct( $slug_category, $slug_product ) {

    $categories = ProductCategory::orderBy('title')->withCount('products')->get();
    $current_category = ProductCategory::where( 'slug', $slug_category )->first();
    $product = Product::where( 'slug', $slug_product )->first();

    return view( 'pages.show-product', [
        'product'           => $product,
        'categories'        => $categories,
        'current_category'  => $current_category,
      ] );
  }
}
