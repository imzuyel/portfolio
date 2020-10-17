<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyCertificate;
use Intervention\Image\Facades\Image;

class MyCertificateController extends Controller
{
    public function index()
    {
        $certificates = MyCertificate::latest()->get();
        return view('backend.certificate.index', [
            'certificates' => $certificates,
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            "details" => "required|string",
            "name" => "required|string",
            "date" => "required|string",
            "source" => "required|string",
            "photo" => "required",
        ]);
        $certificate = new MyCertificate();
        $certificate->details = $request->details;
        $certificate->name = $request->name;
        $certificate->date = $request->date;
        $certificate->source = $request->source;
        $certificate->photo = $this->uploadeImage($request);
        $certificate->save();
        if ($certificate->save()) {
            $notification = array(
                'message' => 'certificate added Succesfully',
                'alert-type' => 'info'
            );
            return redirect()->route('certificate.index')->with($notification);
        }
    }
    public function update(Request $request)
    {
        $request->validate([
            "details" => "required|string",
            "name" => "required|string",
            "date" => "required|string",
            "source" => "required|string",
        ]);
        $certificate = MyCertificate::findOrFail($request->id);
        $certificate->details = $request->details;
        $certificate->name = $request->name;
        $certificate->date = $request->date;
        $certificate->source = $request->source;
        $file1 = $request->file("photo");
        if ($file1) {
            if (file_exists($certificate->photo)) { //If it exits, delete it from folder
                unlink($certificate->photo);
            }
            $certificate->photo = $this->uploadeImage($request);
        }
        $certificate->save();
        if ($certificate->save()) {
            $notification = array(
                'message' => 'certificate Updated Succesfully',
                'alert-type' => 'success'
            );
            return redirect()->route('certificate.index')->with($notification);
        }
    }
    public function published($id)
    {
        $certificate = MyCertificate::findOrfail($id);
        $certificate->status = 1;
        $certificate->save();
        $notification = array(
            'message' => 'certificate Published successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('certificate.index')->with($notification);
    }
    public function unpublished($id)
    {
        $certificate = MyCertificate::findOrfail($id);
        $certificate->status = 2;
        $certificate->save();
        $notification = array(
            'message' => 'certificate Unpublished successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('certificate.index')->with($notification);
    }


    protected function uploadeImage($request)
    {
        $file = $request->file("photo");
        // Get Name
        $get_imageName = date('mdYHis') . uniqid() . $file->getClientOriginalName();
        // Get Name
        $directory = 'backend/images/certificate/';
        // Image Url
        $imageUrl = $directory . $get_imageName;
        // $file->move($directory, $imageUrl);
        Image::make($file)->resize(100,100)->save($imageUrl);
        return $imageUrl;
    }
}
