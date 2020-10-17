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

        if (count($about) > 0) {
            return view('backend.about.index', [
                "about" => $about,
            ]);

        } else {
            $about = new About();
            $about->title = "About Me";
            $about->photo = "backend/images/about/about.jpg";
            $about->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut.";
            $about->save();
            return view('backend.about.index', [
                "about" => $about,
            ]);

        }
    }
    public function update(Request $request)
    {
        $request->validate([
            "title" => "required|string",
            "description" => "required|string"
        ]);

        $about=About::findOrFail($request->id);
        $about->title = $request->title;
        $about->description = $request->description;
        $file=$request->file('photo');
        if($file){
            if(fileExists($about->photo)){
                unlink($about->photo);
            }
            $about->photo=$this->uploadeImage($request);
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
        Image::make($file)->resize(640,426)->save($imageUrl);
        return $imageUrl;
    }
}
