<?php

namespace App\Http\Controllers;

use App\Models\AccessoryProduct;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function shop(){
        $products = Product::latest()->get();
        $accessories = AccessoryProduct::latest()->get();
        $productsAndAccessories = $products->concat($accessories);
        $categories = Category::all();
        $brands = Brand::all();

        return view('userSide.shop', compact('productsAndAccessories', 'categories', 'brands'));
    }
}
