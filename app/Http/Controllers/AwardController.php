<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function index()
    {
        $awards = Award::all();
        return view('backend.award.index', [
            'awards' => $awards,
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            "icon" => "required|string",
            "name" => "required|string",
            "source" => "required|string",
            "details" => "required|string",
        ]);
        $award = new Award();
        $award->name = $request->name;
        $award->icon = $request->icon;
        $award->details = $request->details;
        $award->source = $request->source;
        $award->save();
        $notification = array(
            'message' => 'Awrad added Succesfully',
            'alert-type' => 'info'
        );
        return redirect()->route('award.index')->with($notification);
    }
    public function update(Request $request)
    {
        $request->validate([
            "icon" => "required|string",
            "name" => "required|string",
            "source" => "required|string",
            "details" => "required|string",
        ]);
        $award = Award::findOrFail($request->id);
        $award->name = $request->name;
        $award->icon = $request->icon;
        $award->details = $request->details;
        $award->source = $request->source;
        $award->save();
        if ($award->save()) {
            $notification = array(
                'message' => 'Award Updated Succesfully',
                'alert-type' => 'success'
            );
            return redirect()->route('award.index')->with($notification);
        }
    }
    public function published($id)
    {
        $award = Award::findOrfail($id);
        $award->status = 1;
        $award->save();
        $notification = array(
            'message' => 'Award Published successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('award.index')->with($notification);
    }
    public function unpublished($id)
    {
        $award = Award::findOrfail($id);
        $award->status = 2;
        $award->save();
        $notification = array(
            'message' => 'Award Unpublished successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('award.index')->with($notification);
    }
}
