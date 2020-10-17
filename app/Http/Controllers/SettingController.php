<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::all();

        if (count($setting) > 0) {
            return view('backend.setting.index', [
                "setting" => $setting,
            ]);
        } else { 
            $setting = new Setting();
            $setting->name = "demo";
            $setting->email = "demo@gamil.com";
            $setting->address = "demo address";
            $setting->phone = "013-------";
            $setting->save();
            return view('backend.setting.index', [
                "setting" => $setting,
            ]);
        }
    }
    public function update(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "address" => "required|string",
            "phone" => "required|string",
            "email" => "required|email"
        ]);

        $setting = Setting::findOrFail($request->id);
        $setting->name = $request->name;
        $setting->email = $request->email;
        $setting->address = $request->address;
        $setting->phone = $request->phone;
        $setting->save();
        $notification = array(
            'message' => 'Setting data updated Succesfully',
            'alert-type' => 'info'
        );
        return redirect()->route('setting.index')->with($notification);
    }

}
