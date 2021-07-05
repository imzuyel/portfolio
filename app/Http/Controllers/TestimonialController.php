<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('backend.testimonial.index', [
            'testimonials' => $testimonials,
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|string",
            "name" => "required|string",
            "description" => "required|string",
            "photo" => "required",
        ]);

        $testimonial = new Testimonial();
        $testimonial->title = $request->title;
        $testimonial->name = $request->name;
        $testimonial->description = $request->description;
        $file1 = $request->file("photo");
        if ($file1) {
            $testimonial->photo = $this->uploadeImage($request);
        }
        $testimonial->save();
        if ($testimonial->save()) {
            $notification = array(
                'message' => 'Testimonial added Succesfully',
                'alert-type' => 'info'
            );
            return redirect()->route('testimonial.index')->with($notification);
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            "title" => "required|string",
            "name" => "required|string",
            "description" => "required|string",
        ]);
        $testimonial = Testimonial::findOrFail($request->id);
        $testimonial->title = $request->title;
        $testimonial->name = $request->name;
        $testimonial->description = $request->description;
        $file1 = $request->file("photo");
        if ($file1) {
            unlink($testimonial->photo);
            $testimonial->photo = $this->uploadeImage($request);
        }
        $testimonial->save();
        if ($testimonial->save()) {
            $notification = array(
                'message' => 'testimonial Updated Succesfully',
                'alert-type' => 'success'
            );
            return redirect()->route('testimonial.index')->with($notification);
        }
    }
    public function published($id)
    {
        $testimonial = Testimonial::findOrfail($id);
        $testimonial->status = 1;
        $testimonial->save();
        $notification = array(
            'message' => 'testimonial Published successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('testimonial.index')->with($notification);
    }
    public function unpublished($id)
    {
        $testimonial = Testimonial::findOrfail($id);
        $testimonial->status = 2;
        $testimonial->save();
        $notification = array(
            'message' => 'Testimonial Unpublished successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('testimonial.index')->with($notification);
    }
    protected function uploadeImage($request)
    {
        $file = $request->file("photo");
        // Get Name
        $get_imageName = date('mdYHis') . uniqid() . $file->getClientOriginalName();
        // Get Name
        $directory = 'backend/images/testimonials/';
        // Image Url
        $imageUrl = $directory . $get_imageName;
        // $file->move($directory, $imageUrl);
        Image::make($file)->resize(100, 100)->save($imageUrl);
        return $imageUrl;
    }
}
