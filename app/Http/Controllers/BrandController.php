<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Photo;
use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class BrandController extends Controller
{
    public function index()
    {
        $brandItems = Brand::latest()->get();
        return view('adminSide.allBrands', compact('brandItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminSide.addBrand');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate input
        $validatedData = $request->validate([
            'name' => 'required|string',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:10240',


        ]);
        $image= ['photo'];

        if ($request->hasFile($image)) {
            $imageFile = $request->file($image);
            $filename = time() . '_' . $imageFile->getClientOriginalName();

            // Resize and save the image using Image Intervention
            $image = Image::make($imageFile);
            $image->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('images/' . $filename));

            // Save the photo record in the database with the associated accessory ID
            $photo = new Photo();
            $photo->image_path = 'images/' . $filename;
            // Add any other photo details you may have, e.g., title, description, etc.
            $photo->save();

        }


        //store input
        $brand = new Brand();
        $brand->brandName = $validatedData['name'];
        $brand->photo_id = $photo->id;
        $brand->save();


        return redirect()->route('brandView');

    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        //validate form
        $validatedData = $request->validate([
            'update_name' => 'required|string',

        ]);

        //update input

        $brand = Brand::find($request->update_brandId);

        if (!empty($brand)) {
            // Delete the  brand
            $brand->update([
                'brandName' => $request->update_name
            ]);

            // Optionally, you can perform additional actions after deletion

            return redirect()->route('brandView')->with('success', 'brand updated successfully.');
        }

        return redirect()->route('brandView')->with('error', 'brand not found.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);

        if (!empty($brand)) {
            // Delete the  brand
            $brand->delete();

            // Optionally, you can perform additional actions after deletion

            return redirect()->route('brandView')->with('success', 'brand deleted successfully.');
        }

        return redirect()->route('brandView')->with('error', 'brand not found.');
    }

    public function details($id){
        $products = Product::where('brand_id', '=', $id)->paginate(1);
        $categories = Category::all();
        $brands = Brand::all();
        return view('userSide.brandProducts', compact('products', 'categories', 'brands'));    }

}
