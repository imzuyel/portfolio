<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
       $services = Service::all();
        return view('backend.service.index', [
            'services' => $services,
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|string",
            "cat" => "required|string",
            "description" => "required|string",
            "icon" => "required|string",
        ]);
        $service = new Service();
        $service->title = $request->title;
        $service->cat = $request->cat;
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->save();
        if ($service->save()) {
            $notification = array(
                'message' => 'Service added Succesfully',
                'alert-type' => 'info'
            );
            return redirect()->route('service.index')->with($notification);
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            "title" => "required|string",
            "cat" => "required|string",
            "description" => "required|string",
            "icon" => "required|string",
        ]);

        $service = Service::findOrFail($request->id);
        $service->title = $request->title;
        $service->cat = $request->cat;
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->save();
        if ($service->save()) {
            $notification = array(
                'message' => 'Service Updated Succesfully',
                'alert-type' => 'success'
            );
            return redirect()->route('service.index')->with($notification);
        }
    }
    public function published($id)
    {
        $service = Service::findOrfail($id);
        $service->status = 1;
        $service->save();
        $notification = array(
            'message' => 'Service Published successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('service.index')->with($notification);
    }
    public function unpublished($id)
    {
        $service = Service::findOrfail($id);
        $service->status = 2;
        $service->save();
        $notification = array(
            'message' => 'Service Unpublished successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('service.index')->with($notification);
    }
}
