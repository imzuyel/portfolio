<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use function PHPUnit\Framework\fileExists;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $about = About::all();
        return view('backend.about.index', [
            "about" => $about,
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|string",
            "description" => "required|string",
            'photo' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);
        $about = new About();
        $about->title = $request->title;
        $about->description = $request->description;
        $file1 = $request->file("photo");
        if ($file1) {
            if (file_exists($about->photo)) { //If it exits, delete it from folder
                unlink($about->photo);
            }
            $about->photo = $this->uploadeImage($request);
        }
        $about->save();
        $notification = array(
            'message' => 'About data added Succesfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);

    }
    public function update(Request $request)
    {
        $request->validate([
            "title" => "required|string",
            "description" => "required|string"
        ]);

        $about = About::findOrFail($request->id);
        $about->title = $request->title;
        $about->description = $request->description;
        $file = $request->file('photo');
        if ($file) {

            unlink($about->photo);

            $about->photo = $this->uploadeImage($request);
        }
        $about->save();
        $notification = array(
            'message' => 'About data updated Succesfully',
            'alert-type' => 'info'
        );
        return redirect()->route('about.index')->with($notification);
    }



    protected function uploadeImage($request)
    {
        $file = $request->file("photo");
        // Get Name
        $get_imageName = date('mdYHis') . uniqid() . $file->getClientOriginalName();
        // Get Name
        $directory = 'backend/images/about/';
        // Image Url
        $imageUrl = $directory . $get_imageName;
        // $file->move($directory, $imageUrl);
        Image::make($file)->resize(640, 426)->save($imageUrl);
        return $imageUrl;
    }
}
