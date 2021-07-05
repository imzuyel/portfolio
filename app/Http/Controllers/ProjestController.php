<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Projest;
use PHPUnit\Framework\Constraint\FileExists;

class ProjestController extends Controller
{
    public function index()
    {
        $projects = Projest::all();
        return view('backend.project.index', [
            'projects' => $projects,
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            "details" => "required|string",
            "name" => "required|string",
            "title" => "required|string",
            "photo" => "required",
            "link" => "required",
        ],[
            'link.required'=> 'Link is required'
        ]);
        $project = new Projest();
        $project->details = $request->details;
        $project->name = $request->name;
        $project->title = $request->title;
        $project->date = $request->link;
        $project->cat = $request->cat;
        $project->photo = $this->uploadeImage($request);
        $project->save();
        if ($project->save()) {
            $notification = array(
                'message' => 'Project added Succesfully',
                'alert-type' => 'info'
            );
            return redirect()->route('project.index')->with($notification);
        }
    }
    public function update(Request $request)
    {
        $request->validate([
            "details" => "required|string",
            "name" => "required|string",
            "title" => "required|string",
            "link" => "required",
        ],[
            'link.required' => 'Link is required'
        ]);
        $project = Projest::findOrFail($request->id);
        $project->details = $request->details;
        $project->name = $request->name;
        $project->title = $request->title;
        $project->date = $request->link;
        $project->cat = $request->cat;
        $file1 = $request->file("photo");
        if ($file1) {
            if (file_exists($project->photo)) { //If it exits, delete it from folder
                unlink($project->photo);
            }
            $project->photo = $this->uploadeImage($request);
        }
        $project->save();
        if ($project->save()) {
            $notification = array(
                'message' => 'Project Updated Succesfully',
                'alert-type' => 'success'
            );
            return redirect()->route('project.index')->with($notification);
        }
    }
    public function published($id)
    {
        $project = Projest::findOrfail($id);
        $project->status = 1;
        $project->save();
        $notification = array(
            'message' => 'Project Published successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('project.index')->with($notification);
    }
    public function unpublished($id)
    {
        $project = Projest::findOrfail($id);
        $project->status = 2;
        $project->save();
        $notification = array(
            'message' => 'Project Unpublished successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('project.index')->with($notification);
    }

    public function delete($id)
    {

        $delete = Projest::find($id);
        $image_finding = $delete->photo;
        if (file_exists($image_finding)) { //If it exits, delete it from folder
            unlink($image_finding);
        }
        $delete->delete();
        $notification = array(
            'message' => 'School Deleted successfully!',
            'alert-type' => 'success',
        );
        return redirect()->route('project.index')->with($notification);
    }


    protected function uploadeImage($request)
    {
        $file = $request->file("photo");
        // Get Name
        $get_imageName = date('mdYHis') . uniqid() . $file->getClientOriginalName();
        // Get Name
        $directory = 'backend/images/project/';
        // Image Url
        $imageUrl = $directory . $get_imageName;
        // $file->move($directory, $imageUrl);
        Image::make($file)->save($imageUrl);
        return $imageUrl;
    }
}
