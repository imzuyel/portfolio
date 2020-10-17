<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        return view('backend.experience.index', [
            'experiences' => $experiences,
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
        $experience = new Experience();
        $experience->title = $request->title;
        $experience->academy = $request->academy;
        $experience->start = $request->start;
        $experience->finish = $request->finish;
        $experience->save();
        if ($experience->save()) {
            $notification = array(
                'message' => 'experience added Succesfully',
                'alert-type' => 'info'
            );
            return redirect()->route('experience.index')->with($notification);
        }
    }
    public function update(Request $request)
    {
        $experience = Experience::findOrFail($request->id);
        $experience->title = $request->title;
        $experience->academy = $request->academy;
        $experience->start = $request->start;
        $experience->finish = $request->finish;
        $experience->save();
        if ($experience->save()) {
            $notification = array(
                'message' => 'Experience Updated Succesfully',
                'alert-type' => 'success'
            );
            return redirect()->route('experience.index')->with($notification);
        }
    }
    public function published($id)
    {
        $experience = Experience::findOrfail($id);
        $experience->status = 1;
        $experience->save();
        $notification = array(
            'message' => 'Experience Published successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('experience.index')->with($notification);
    }
    public function unpublished($id)
    {
        $experience = Experience::findOrfail($id);
        $experience->status = 2;
        $experience->save();
        $notification = array(
            'message' => 'Experience Unpublished successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('experience.index')->with($notification);
    }
}
