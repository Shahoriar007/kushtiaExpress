<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryItems = Category::latest()->get();
        return view('adminSide.allCategories', compact('categoryItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminSide.addCategory');

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
        $category = new Category();
        $category->categoryName = $validatedData['name'];
        $category->save();


        return redirect()->route('categoryView');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //validate form
        $validatedData = $request->validate([
            'update_name' => 'required|string',

        ]);

        //update input

        $category = Category::find($request->update_categoryId);

        if (!empty($category)) {
            // Delete the  category
            $category->update([
                'categoryName' => $request->update_name
            ]);

            // Optionally, you can perform additional actions after deletion

            return redirect()->route('categoryView')->with('success', 'Category updated successfully.');
        }

        return redirect()->route('categoryView')->with('error', 'category not found.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        if (!empty($category)) {
            // Delete the  category
            $category->delete();

            // Optionally, you can perform additional actions after deletion

            return redirect()->route('categoryView')->with('success', 'Category deleted successfully.');
        }

        return redirect()->route('categoryView')->with('error', 'category not found.');
    }
    public function details($id){
        $products = Product::where('category_id', '=', $id)->get();
        $categories = Category::all();
        $brands = Brand::all();
        return view('userSide.categoryProducts', compact('products', 'categories', 'brands'));
    }
}
