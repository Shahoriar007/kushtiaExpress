<?php

namespace App\Http\Controllers;

use App\Models\AccessoryProduct;
use Illuminate\Http\Request;

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
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string',

            'price' => 'required|numeric',
            'availability' => 'required|in:1,0',
            'description' => 'nullable|string',
            'bullet_point' => 'nullable|string',
        ]);

         // Store the Accessories
        $accessory = new AccessoryProduct();
        $accessory->name = $validatedData['name'];
        $accessory->price = $validatedData['price'];
        $accessory->availability = $validatedData['availability'];
        $accessory->description = $validatedData['description'];
        $accessory->bullet_point = $validatedData['bullet_point'];

        // Save the accessory
        $accessory->save();

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

}
