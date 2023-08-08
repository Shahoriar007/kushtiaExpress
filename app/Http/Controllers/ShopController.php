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
        $products = Product::latest()->paginate(9);
        $categories = Category::all();
        $brands = Brand::all();

        return view('userSide.shop', compact('products', 'categories', 'brands'));
    }
}
