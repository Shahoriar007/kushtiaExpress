<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Review;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\AccessoryProduct;
use Illuminate\Support\Facades\Response;

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
        $results = [];

        return view('userSide.home', compact('sliders', 'accessoryItems', 'categories', 'products', 'reviews', 'topFeatured', 'brands', 'results'));
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

    public function search(Request $request)
    {
        try {
            // Check if a search term is provided in the request
            $searchTerm = $request->input('searchTerm');
            $results = [];

            if ($searchTerm) {
                // Perform the search in the 'products' table
                $results = Product::where('name', 'like', "%$searchTerm%")->get();
            }

            // Return all variables to the view
            return Response::json(['results' => $results]);

        } catch (\Exception $e) {
            // Handle the exception (log it, redirect with an error message, etc.)
            // For example, you can log the exception and redirect to an error page:
             info($e->getMessage());
            return view('error')->with('message', 'An error occurred during the search.');
        }
    }


}
