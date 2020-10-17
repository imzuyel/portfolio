<?php

namespace App\Http\Controllers;

use App\Models\Folower;
use Illuminate\Http\Request;

class FolowerController extends Controller
{
    public function index()
    {
        $folowers = Folower::all();
        return view('backend.flow.index', [
            'folowers' => $folowers,
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            "link" => "required|string",
            "icon" => "required",
        ]);
        $folower = new Folower();
        $folower->link = $request->link;
        $folower->icon = $request->icon;
        $folower->save();
        if ($folower->save()) {
            $notification = array(
                'message' => 'Folower added Succesfully',
                'alert-type' => 'info'
            );
            return redirect()->route('flow.index')->with($notification);
        }
    }
    public function update(Request $request)
    {
        $request->validate([
            "link" => "required|string",
            "icon" => "required",
        ]);
        $folower = Folower::findOrFail($request->id);
        $folower->link = $request->link;
        $folower->icon = $request->icon;
        $folower->save();
        if ($folower->save()) {
            $notification = array(
                'message' => 'Folower Updated Succesfully',
                'alert-type' => 'success'
            );
            return redirect()->route('flow.index')->with($notification);
        }
    }
    public function published($id)
    {
        $folower = Folower::findOrfail($id);
        $folower->status = 1;
        $folower->save();
        $notification = array(
            'message' => 'Folower Published successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('flow.index')->with($notification);
    }
    public function unpublished($id)
    {
        $folower = Folower::findOrfail($id);
        $folower->status = 2;
        $folower->save();
        $notification = array(
            'message' => 'Folower Unpublished successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('flow.index')->with($notification);
    }

}
