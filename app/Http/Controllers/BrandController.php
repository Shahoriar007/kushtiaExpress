<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

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

        ]);

        //store input
        $brand = new Brand();
        $brand->brandName = $validatedData['name'];
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

}
