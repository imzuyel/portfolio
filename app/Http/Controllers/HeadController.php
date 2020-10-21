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
            $head->description = "I have over 1 experience in PHP development, normally using Laravel for creating bespoke products including invoicing systems, e-commercce solutions, or other projects requiring custom workflows.i can also develop SAP application using Laravel & Vue js.";
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
        return view('backend.head.banner_index', [
            "head_banner" => $head_banner,
        ]);
    }



    public function resume(Request $request)
    {
        $request->validate([
            "resume" => "mimes:pdf|max:10000|required",
            'banner_image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);

        $head_banner = new Headerbanner();
        $head_banner->banner_image = $this->uploadeImage($request);
        $file = $request->file("resume");
        $filename = time() . '.' . $request->file('resume')->extension();
        $filePath = 'backend/images/header/';
        $imageUrl = $filePath . $filename;
        $file->move($filePath, $filename);
        $head_banner->resume = $imageUrl;
        $head_banner->save();
        return redirect()->back();
    }
    public function banner_update(Request $request)
    {
        $request->validate([
            "resume" => "mimes:pdf|max:10000",
            'banner_image' => 'mimes:jpeg,jpg,png,gif|max:10000'
        ]);
        $header_banner = Headerbanner::findOrFail($request->id);
        // Image Here
        $file = $request->file("banner_image");
        if ($file) {
            if (file_exists($header_banner->banner_image)) { //If it exits, delete it from folder
                unlink($header_banner->banner_image);
            }
            $header_banner->banner_image = $this->uploadeImage($request);
        }
        $file = $request->file("resume");
        if ($file) {

            if (file_exists($file)) {
                File::delete($header_banner->resume);
            }
            $filename = time() . '.' . $request->file('resume')->extension();
            $filePath = 'backend/images/header/';
            $imageUrl = $filePath . $filename;
            $file->move($filePath, $filename);

            $header_banner->resume = $imageUrl;
        }
        $header_banner->save();
        if ($header_banner->save()) {
            $notification = array(
                'message' => 'Header Banner & Resume  Updated successfully!',
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
        Image::make($file)->resize(1680, 950)->save($imageUrl);
        return $imageUrl;
    }
}
