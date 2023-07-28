<?php

namespace App\Http\Controllers;

use App\Models\AccessoryProduct;
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
        $products = Product::latest()->get();
        $reviews = Review::join('photos', 'reviews.photo_id', '=', 'photos.id')
        ->select('reviews.*', 'photos.image_path')
        ->get();
        $topFeatured = Product::where('top_featured', "=", '1')->get();

        return view('userSide.home', compact('sliders', 'accessoryItems', 'categories', 'products', 'reviews', 'topFeatured'));
    }

    public function contact()
    {
        return view('userSide.contact');
    }

    public function about()
    {
        return view('userSide.about');
    }
}
