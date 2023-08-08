<?php

namespace App\Http\Controllers;

use App\Models\AccessoryProduct;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $sliders = Slider::latest()->get();
        $accessoryItems = AccessoryProduct::latest()->get();
        $categories = Category::all();
        $brands = Brand::all();
        $products = Product::latest()->get();
        $reviews = Review::join('photos', 'reviews.photo_id', '=', 'photos.id')
        ->select('reviews.*', 'photos.image_path')
        ->get();
        $topFeatured = Product::where('top_featured', "=", '1')->get();

        return view('userSide.home', compact('sliders', 'accessoryItems', 'categories', 'products', 'reviews', 'topFeatured', 'brands'));
    }

    public function contact()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('userSide.contact', compact('categories', 'brands'));
    }

    public function about()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('userSide.about', compact('categories', 'brands'));
    }
}
