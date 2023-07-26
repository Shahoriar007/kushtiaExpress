<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Review;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::latest()->get();
        return view('adminSide.allReviews', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminSide.addReview');

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
            'reviewText' => 'required|max:255'
        ]);

        //save photo in photos table
        $imageFile = $request->file('photo');

                $filename = time() . '_' . $imageFile->getClientOriginalName();

                $image = Image::make($imageFile);
                $image->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $image->save(public_path('images/' . $filename));

                $photo = new Photo();
                $photo->image_path = 'images/' . $filename;
                $photo->save();

                // Get the photo ID of the newly created entry
                $photo_id = $photo->id;

                $review = new Review();
                $review->name = $validatedData['name'];
                $review->reviewText = $validatedData['reviewText'];
                $review->photo_id = $photo_id;

                 // Save the Review
                $review->save();

                return redirect()->route('reviewView')->with('success', 'Accessory created successfully!');


    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $review = Review::find($id);

        if (!empty($review)) {
            // Delete the accessory product
            $review->delete();

            // Optionally, you can perform additional actions after deletion

            return redirect()->route('reviewView')->with('success', 'Accessory product deleted successfully.');
        }

        return redirect()->route('reviewView')->with('error', 'Accessory product not found.');
    }
}
