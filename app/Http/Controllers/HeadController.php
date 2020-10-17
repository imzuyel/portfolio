<?php

namespace App\Http\Controllers;

use App\Models\Head;
use App\Models\Headerbanner;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use File;

use function PHPUnit\Framework\fileExists;

class HeadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function text_index()
    {
        $head = Head::all();
        if (count($head) > 0) {
            return view('backend.head.index')
                ->with('head', $head);
        } else {
            $head = new Head();
            $head->title = "Professional Web Developer";
            $head->subtitle = "Hello My Name is";
            $head->name = "Zuyel Rana";
            $head->description = "Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio";
            $head->save();
            return view('backend.home.index')
                ->with('head', $head);
        }
    }
    public function text_update(Request $request)
    {
        $head = Head::findOrFail($request->id);
        $head->title = $request->title;
        $head->subtitle = $request->subtitle;
        $head->name = $request->name;
        $head->description = $request->description;
        $head->save();
        $notification = array(
            'message' => 'Header Text Updated successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('header.text_manage')->with($notification);
    }






    public function banner_image()
    {
        $head_banner = Headerbanner::all();
        if (count($head_banner) > 0) {

            return view('backend.head.banner_index', [
                "head_banner" => $head_banner,
            ]);

        } else {
            $head_banner = new Headerbanner();
            $head_banner->banner_image = "backend/images/header/1.jpg";
            $head_banner->resume = "backend/images/header/my-cv.pdf";
            $head_banner->save();
            return view('backend.head.banner_index', [
                "head_banner" => $head_banner,
            ]);

        }
    }
    public function banner_update(Request $request)
    {
        $header_banner = Headerbanner::findOrFail($request->id);
        // Image Here
        $file = $request->file("banner_image");
        if ($file) {
            if (file_exists($header_banner->banner_image)) { //If it exits, delete it from folder
                unlink($header_banner->banner_image);
            }
            $header_banner->banner_image = $this->uploadeImage($request);
        }
        $header_banner->save();
        if ($header_banner->save()) {
            $notification = array(
                'message' => 'Header Banner Updated successfully!',
                'alert-type' => 'success'
            );
            return redirect()->route('header.banner_image')->with($notification);
        } else {
            $notification = array(
                'message' => 'Somethig going Wrong!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }







    public function banner_resume()
    {
        $head_banner = Headerbanner::all();
        if (count($head_banner) > 0) {
            return view('backend.head.resume_index')
                ->with('head_banner', $head_banner);
        } else {
            $head_banner = new Headerbanner();
            $head_banner->banner_image = "backend/images/header/1.jpg";
            $head_banner->resume = "backend/images/header/my-cv.pdf";
            $head_banner->save();
            return view('backend.head.resume_index')
                ->with('head_banner', $head_banner);
        }
    }
    public function resume_update($id)
    {
        $resume = Headerbanner::findOrFail($id);
        return view('backend.head.resume_update')
        ->with('resume', $resume);
    }

    public function resume_update_save(Request $request)
    {
        $request->validate([
            "resume" => "mimes:pdf|max:10000"
        ]);
        $header_resume = Headerbanner::findOrFail($request->id);
        // Image Here
        $file = $request->file("resume");
        if ($file) {

           if (file_exists($file)) {
                File::delete($header_resume->resume);
           }
            $filename = time() . '.' . $request->file('resume')->extension();
            $filePath = 'backend/images/header/';
            $imageUrl = $filePath . $filename;
            $file->move($filePath, $filename);

            $header_resume->resume = $imageUrl;
        }
        $header_resume->save();
        if ($header_resume->save()) {
            $notification = array(
                'message' => 'Resume Updated successfully!',
                'alert-type' => 'success'
            );
            return redirect()->route('header.banner_resume')->with($notification);
        } else {
            $notification = array(
                'message' => 'Somethig going Wrong!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }





    protected function uploadeImage($request)
    {
        $file = $request->file("banner_image");
        // Get Name
        $get_imageName = date('mdYHis') . uniqid() . $file->getClientOriginalName();
        // Get Name
        $directory = 'backend/images/header/';
        // Image Url
        $imageUrl = $directory . $get_imageName;
        // $file->move($directory, $imageUrl);
        Image::make($file)->resize(1660,900)->save($imageUrl);
        return $imageUrl;
    }
}
