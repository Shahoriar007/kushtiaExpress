<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('adminSide.allSliders', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminSide.addSlider');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate input
        $validatedData = $request->validate([
            'title' => 'required|string',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        //save photo in photos table
        $imageFile = $request->file('photo');

                $filename = time() . '_' . $imageFile->getClientOriginalName();

                $image = Image::make($imageFile);
                // $image->resize(800, null, function ($constraint) {
                //     $constraint->aspectRatio();
                // });
                $image->save(public_path('images/' . $filename));

                $photo = new Photo();
                $photo->image_path = 'images/' . $filename;
                $photo->save();

                // Get the photo ID of the newly created entry
                $photo_id = $photo->id;

                $slider = new Slider();
                $slider->title = $validatedData['title'];
                $slider->photo_id = $photo_id;

                 // Save the slider
                $slider->save();

                return redirect()->route('sliderView')->with('success', 'Accessory created successfully!');


    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);

        if (!empty($slider)) {
            // Delete the accessory product
            $slider->delete();

            // Optionally, you can perform additional actions after deletion

            return redirect()->route('sliderView')->with('success', 'Accessory product deleted successfully.');
        }

        return redirect()->route('sliderView')->with('error', 'Accessory product not found.');
    }
}
