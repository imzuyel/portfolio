<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Award;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Folower;
use App\Models\Head;
use App\Models\Headerbanner;
use App\Models\MyCertificate;
use App\Models\Projest;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Skill;
use Illuminate\Http\Request;

class GineusController extends Controller
{
    function index()
    {
        $headstext = Head::first();
        $head_banner = Headerbanner::first();
        $about = About::first();
        $service = Service::where('status',1)->latest()->get();
        $skill = Skill::where('status',1)->latest()->get();
        $education = Education::where('status',1)->latest()->get();
        $exprence = Experience::where('status',1)->latest()->get();
        $certificate = MyCertificate::where('status',1)->latest()->get();
        $folower = Folower::where('status',1)->latest()->get();
        $award = Award::where('status',1)->latest()->get();
        $project = Projest::where('status',1)->latest()->get();
        $setting = Setting::first();
        $awards1 = Award::all();
        $award1 = count($awards1)+10;
        $projects1 = Projest::all();
        $project1 = count($projects1)+5;
        return view('fontend.index', [
            'headstext' => $headstext,
            'head_banner' => $head_banner,
            'about' => $about,
            'service' => $service,
            'skill' => $skill,
            'education' => $education,
            'exprence' => $exprence,
            'certificate' => $certificate,
            'award' => $award,
            'setting' => $setting,
            'folower' => $folower,
            'project' => $project,
            'award1' => $award1,
            'project1' => $project1,

        ]);
    }


    public function contact(Request $request)
    {

        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "message" => "required|min:50",
        ]);
        $contact = new Contact();
        $contact->name=$request->name();
        $contact->email=$request->email();
        $contact->message=$request->message();
        $notification = array(
            'message' => 'Thank you  for contact me.. I will contact you very soon!!!',
            'alert-type' => 'success'
        );
        return redirect()->route('index')->with($notification);
    }
}
