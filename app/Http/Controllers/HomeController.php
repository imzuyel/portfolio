<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\MyCertificate;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Projest;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $services = Service::all();
        $service = count($services);
        $skills = Skill::all();
        $skill = count($skills);
        $certificates = MyCertificate::all();
        $certificate = count($certificates);
        $awards = Award::all();
        $award = count($awards);
        $contacts = Contact::all();
        $contact = count($contacts);
        $educations = Education::all();
        $education = count($educations);
        $experiences = Experience::all();
        $experience = count($experiences);
        $projects = Projest::all();
        $project = count($projects);
        return view('backend.home.index', [
            'service' => $service,
            'skill' => $skill,
            'certificate' => $certificate,
            'award' => $award,
            'contact' => $contact,
            'education' => $education,
            'experience' => $experience,
            'project' => $project,
        ]);
    }
}
