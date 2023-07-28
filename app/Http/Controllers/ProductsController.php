<?php

namespace App\Http\Controllers;

use App\Models\AccessoryProduct;
use App\Models\Brand;

use App\Models\Photo;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Route;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $productItems = Product::latest()->get();


        return view('adminSide.allProducts', compact('productItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brandItems = Brand::latest()->get();
        $categoryItems = Category::latest()->get();

        return view('adminSide.addProducts', compact('brandItems','categoryItems'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate the form data
        // $validatedData = $request->validate([
        //     'name' => 'required|string',
        //     'price' => 'required',
        //     'category_id' => 'required',
        //     'brand_id' => 'required',
        //     'availability' => 'required',
        //     'description' => 'nullable',
        //     'bullet_point' => 'nullable',
        //     'is_new' => 'required',
        //     'pre_owned' => 'required',
        //     'top_featured' => 'required',
        //     'photo1' => 'image|mimes:jpeg,png,jpg,gif|max:10240',
        //     'photo2' => 'image|mimes:jpeg,png,jpg,gif|max:10240',
        //     'photo3' => 'image|mimes:jpeg,png,jpg,gif|max:10240',

        // ]);
         // Store the product
         $product = new Product();
         $product->name = $request['name'];
         $product->price = $request['price'];
         $product->category_id = $request['category_id'];
         $product->brand_id = $request['brand_id'];
         $product->availability = $request['availability'];
         $product->description = $request['description'];
         $product->bullet_point = $request['bulletPoint'];
         $product->is_new = $request['is_new'];
         $product->pre_owned = $request['pre_owned'];
         $product->top_featured = $request['top_featured'];

          // Save the accessory
        $product->save();
         // Save the images
         $images = ['photo1', 'photo2', 'photo3'];
         foreach ($images as $imageInput) {
             if ($request->hasFile($imageInput)) {
                 $imageFile = $request->file($imageInput);
                 $filename = time() . '_' . $imageFile->getClientOriginalName();

                 // Resize and save the image using Image Intervention
                 $image = Image::make($imageFile);
                 $image->resize(800, null, function ($constraint) {
                     $constraint->aspectRatio();
                 });
                 $image->save(public_path('images/' . $filename));

                 // Save the photo record in the database with the associated accessory ID
                 $photo = new Photo();
                 $photo->products_id = $product->id;
                 $photo->image_path = 'images/' . $filename;
                 // Add any other photo details you may have, e.g., title, description, etc.
                 $photo->save();
             }
         }

        // Redirect or perform any other actions
        return redirect()->route('products.index')->with('success', 'Product created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
    }

    public function details($id)
    {
        $currentRouteName = Route::currentRouteName();
        if (strpos($currentRouteName, 'accessory') !== false) {
            $detail = AccessoryProduct::find($id);
        }
        else{
            $detail = Product::find($id);

        }

        return view('userSide.details', compact('detail'));

    }
}
