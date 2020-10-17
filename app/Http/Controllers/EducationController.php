<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::all();
        return view('backend.education.index', [
            'educations' => $educations,
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|string",
            "academy" => "required|string",
            "start" => "required|string",
            "finish" => "required|string",
        ]);
        $education = new Education();
        $education->title = $request->title;
        $education->academy = $request->academy;
        $education->start = $request->start;
        $education->finish = $request->finish;
        $education->save();
        if ($education->save()) {
            $notification = array(
                'message' => 'Education added Succesfully',
                'alert-type' => 'info'
            );
            return redirect()->route('education.index')->with($notification);
        }
    }
    public function update(Request $request)
    {
        $education = Education::findOrFail($request->id);
        $education->title = $request->title;
        $education->academy = $request->academy;
        $education->start = $request->start;
        $education->finish = $request->finish;
        $education->save();
        if ($education->save()) {
            $notification = array(
                'message' => 'Education Updated Succesfully',
                'alert-type' => 'success'
            );
            return redirect()->route('education.index')->with($notification);
        }
    }
    public function published($id)
    {
        $education = Education::findOrfail($id);
        $education->status = 1;
        $education->save();
        $notification = array(
            'message' => 'education Published successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('education.index')->with($notification);
    }
    public function unpublished($id)
    {
        $education = Education::findOrfail($id);
        $education->status = 2;
        $education->save();
        $notification = array(
            'message' => 'education Unpublished successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('education.index')->with($notification);
    }
}
