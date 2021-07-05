<?php

namespace App\Http\Controllers;

use App\Models\Seo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SeoController extends Controller
{
    public function index()
    {
        $seos = Seo::all();
        return view('backend.seo.index', [
            'seos' => $seos,
        ]);
    }
    public function store(Request $request)
    {

        $request->validate([
            "title" => "required|string",
            "share_title" => "required|string",
            "keywords" => "required|string",
            "description" => "required|string",
            "photo" => "required",
        ]);
        $seo = new Seo();
        $seo->title = $request->title;
        $seo->share_title = $request->share_title;
        $seo->keywords = $request->keywords;
        $seo->description = $request->description;
        $seo->photo = $this->uploadeImage($request);
        $seo->save();
        if ($seo->save()) {
            $notification = array(
                'message' => 'Seo added Succesfully',
                'alert-type' => 'info'
            );
            return redirect()->route('seo.index')->with($notification);
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            "title" => "required|string",
            "share_title" => "required|string",
            "keywords" => "required|string",
            "description" => "required|string",
        ]);

        $seo = Seo::findOrFail($request->id);
        $seo->title = $request->title;
        $seo->keywords = $request->keywords;
        $seo->share_title = $request->share_title;
        $seo->description = $request->description;
        $file1 = $request->file("photo");
        if ($file1) {
            if (file_exists($seo->photo)) { //If it exits, delete it from folder
                unlink($seo->photo);
            }
            $seo->photo = $this->uploadeImage($request);
        }
        $seo->save();
        if ($seo->save()) {
            $notification = array(
                'message' => 'Seo Updated Succesfully',
                'alert-type' => 'success'
            );
            return redirect()->route('seo.index')->with($notification);
        }
    }
    protected function uploadeImage($request)
    {
        $file1 = $request->file("photo");
        // Get Name
        $get_imageName = uniqid() . '.' . $file1->getClientOriginalExtension();
        // Get Name
        $directory = 'backend/images/seo/';
        // Image Url
        $imageUrl = $directory . $get_imageName;
        // $file->move($directory, $imageUrl);
        Image::make($file1)->save($imageUrl);
        return $imageUrl;
    }
}
