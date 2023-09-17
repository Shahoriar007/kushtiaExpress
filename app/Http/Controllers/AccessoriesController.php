<?php

namespace App\Http\Controllers;

use App\Models\AccessoryProduct;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Photo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AccessoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accessoryItems = AccessoryProduct::latest()->get();
        return view('adminSide.allAccessories', compact('accessoryItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('adminSide.addAccessories');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate the input


        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'offer_price' => 'required|numeric',
            'availability' => 'required|in:1,0',
            'description' => 'nullable|string',
            'bullet_point' => 'nullable|string',
            'photo1' => 'image|mimes:jpeg,png,jpg,gif|max:10240',
            'photo2' => 'image|mimes:jpeg,png,jpg,gif|max:10240',
            'photo3' => 'image|mimes:jpeg,png,jpg,gif|max:10240',
            'photo4' => 'image|mimes:jpeg,png,jpg,gif|max:10240',
            'photo5' => 'image|mimes:jpeg,png,jpg,gif|max:10240',
            'link' => 'nullable|url'

        ]);

        // Store the Accessories
        $accessory = new AccessoryProduct();
        $accessory->name = $validatedData['name'];
        $accessory->price = $validatedData['price'];
        $accessory->offer_price = $request['offer_price'];
        $accessory->availability = $validatedData['availability'];
        $accessory->description = $validatedData['description'];
        $accessory->bullet_point = $validatedData['bullet_point'];
        $accessory->link = $request['link'];

        // Save the accessory
        $accessory->save();

         // Save the images
        $images = ['photo1', 'photo2', 'photo3', 'photo4', 'photo5'];
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
                $photo->accessory_products_id = $accessory->id;
                $photo->image_path = 'images/' . $filename;
                // Add any other photo details you may have, e.g., title, description, etc.
                $photo->save();
            }
        }

        // Redirect or perform any other actions
        return redirect()->route('accessories.index')->with('success', 'Accessory created successfully!');


    }

    /**
     * Display the specified resource.
     */
    public function show(Accessories $accessories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accessories $accessories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accessories $accessories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $accessoryProduct = AccessoryProduct::find($id);

        if (!empty($accessoryProduct)) {
            // Delete the accessory product
            $accessoryProduct->delete();

            // Optionally, you can perform additional actions after deletion

            return redirect()->route('accessories.index')->with('success', 'Accessory product deleted successfully.');
        }

        return redirect()->route('accessories.index')->with('error', 'Accessory product not found.');
    }

    public function accessory(){
        $products = AccessoryProduct::latest()->paginate(12);
        $categories = Category::all();
        $brands = Brand::all();

        return view('userSide.accessories', compact('products', 'categories', 'brands'));
    }

}
