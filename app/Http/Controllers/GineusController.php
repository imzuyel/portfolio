<?php

namespace App\Http\Controllers;

use App\Models\Seo;
use App\Models\Head;
use App\Models\About;
use App\Models\Award;
use App\Models\Skill;
use App\Models\Folower;
use App\Models\Projest;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Testimonial;
use App\Models\Headerbanner;
use App\Models\MyCertificate;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class GineusController extends Controller
{
    function index()
    {
        $data['headstext']          = Head::first();
        $data['head_banner']        = Headerbanner::first();
        $data['about']              = About::select('id', 'title', 'description', 'photo')->first();
        $data['service']            = Service::where('status', 1)->select('id', 'title', 'description', 'icon')->latest()->get();
        $data['skill']              = Skill::where('status', 1)->select('id', 'skill_name', 'value', 'color')->latest()->get();
        $data['education']          = Education::where('status', 1)->select('id', 'title', 'academy', 'start', 'finish')->latest()->get();
        $data['exprence']           = Experience::where('status', 1)->select('id', 'title', 'academy', 'start', 'finish')->latest()->get();
        $data['certificate']        = MyCertificate::where('status', 1)->select('id', 'details', 'name', 'date', 'photo', 'source')->latest()->get();
        $data['folower']            = Folower::where('status', 1)->select('id', 'link', 'icon')->latest()->get();
        $data['award']              = Award::where('status', 1)->select('id', 'icon', 'name', 'source', 'details')->latest()->get();
        $data['project']            = Projest::where('status', 1)->select('id', 'details', 'name', 'cat', 'date', 'title', 'photo')->get();
        $data['setting']            = Setting::select('id', 'name', 'email', 'address', 'phone')->first();
        $data['awards']             = Award::all();
        $data['projects']           = Projest::all();
        $data['testimonials']       = Testimonial::where('status', 1)->select('id', 'name', 'title', 'description','photo')->get();


        $seo                        =  Seo::all();
        $actual_link                = "http:://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $home_link                  = "http://$_SERVER[HTTP_HOST]";
        $home_title                 = $seo[0]['title'];
        $home_keywards              = $seo[0]['keywords'];
        $home_photo                 = $home_link . "/" . $seo[0]['photo'];

        $home_share_title           = $seo[0]['share_title'];
        $home_description           = $seo[0]['description'];
        // Seo
        SEOMeta::setTitle($home_title);
        SEOMeta::setDescription($home_description);
        SEOMeta::setCanonical($actual_link);
        SEOMeta::addKeyword($home_keywards);

        OpenGraph::setDescription($home_description);
        OpenGraph::setTitle($home_share_title);
        OpenGraph::setUrl($actual_link);
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addImage($home_photo);

        TwitterCard::setTitle($home_share_title);
        TwitterCard::setSite('@imzueyl');

        JsonLd::setTitle($home_title);
        JsonLd::setDescription($home_description);
        JsonLd::addImage($home_photo);


        return view('fontend.index', $data, compact('seo'));
    }



    public function project()
    {
        $data['projects']           = Projest::all();
        $data['setting']            = Setting::select('id', 'name', 'email', 'address', 'phone')->first();
        $data['folower']            = Folower::where('status', 1)->select('id', 'link', 'icon')->latest()->get();
        $data['skill']              = Skill::where('status', 1)->select('id', 'skill_name', 'value', 'color')->latest()->get();
        $data['testimonials']       = Testimonial::where('status', 1)->select('id', 'name', 'title', 'description', 'photo')->get();
        // Seo
        $seo                        =  Seo::all();
        $actual_link                = "http:://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $home_link                  = "http://$_SERVER[HTTP_HOST]";
        $home_title                 = $seo[0]['title'];
        $home_keywards              = $seo[0]['keywords'];
        $home_photo                 = $home_link . "/" . $seo[0]['photo'];

        $home_share_title           = $seo[0]['share_title'];
        $home_description           = $seo[0]['description'];
        SEOMeta::setTitle($home_title);
        SEOMeta::setDescription($home_description);
        SEOMeta::setCanonical($actual_link);
        SEOMeta::addKeyword($home_keywards);

        OpenGraph::setDescription($home_description);
        OpenGraph::setTitle($home_share_title);
        OpenGraph::setUrl($actual_link);
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addImage($home_photo);

        TwitterCard::setTitle($home_share_title);
        TwitterCard::setSite('@imzueyl');

        JsonLd::setTitle($home_title);
        JsonLd::setDescription($home_description);
        JsonLd::addImage($home_photo);

        return view('fontend.project.index', $data,compact('seo'));
    }
    public function about()
    {
        $data['awards']             = Award::all();
        $data['projects']           = Projest::all();
        $data['service']            = Service::where('status', 1)->select('id', 'title', 'description', 'icon')->latest()->get();
        $data['skill']              = Skill::where('status', 1)->select('id', 'skill_name', 'value', 'color')->latest()->get();
        $data['education']          = Education::where('status', 1)->select('id', 'title', 'academy', 'start', 'finish')->latest()->get();
        $data['exprence']           = Experience::where('status', 1)->select('id', 'title', 'academy', 'start', 'finish')->latest()->get();
        $data['setting']            = Setting::select('id', 'name', 'email', 'address', 'phone')->first();
        $data['folower']            = Folower::where('status', 1)->select('id', 'link', 'icon')->latest()->get();
        $data['about']              = About::select('id', 'title', 'description', 'photo')->first();
        $data['testimonials']       = Testimonial::where('status', 1)->select('id', 'name', 'title', 'description', 'photo')->get();
        $data['certificate']        = MyCertificate::where('status', 1)->select('id', 'details', 'name', 'date', 'photo', 'source')->latest()->get();
        // Seo
        $seo                        =  Seo::all();
        $actual_link                = "http:://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $home_link                  = "http://$_SERVER[HTTP_HOST]";
        $home_title                 = $seo[0]['title'];
        $home_keywards              = $seo[0]['keywords'];
        $home_photo                 = $home_link . "/" . $seo[0]['photo'];

        $home_share_title           = $seo[0]['share_title'];
        $home_description           = $seo[0]['description'];
        SEOMeta::setTitle($home_title);
        SEOMeta::setDescription($home_description);
        SEOMeta::setCanonical($actual_link);
        SEOMeta::addKeyword($home_keywards);

        OpenGraph::setDescription($home_description);
        OpenGraph::setTitle($home_share_title);
        OpenGraph::setUrl($actual_link);
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addImage($home_photo);

        TwitterCard::setTitle($home_share_title);
        TwitterCard::setSite('@imzueyl');

        JsonLd::setTitle($home_title);
        JsonLd::setDescription($home_description);
        JsonLd::addImage($home_photo);
        return view('fontend.about.index', $data,compact('seo'));
    }


    public function contactMe()
    {
        $data['setting']            = Setting::select('id', 'name', 'email', 'address', 'phone')->first();
        $data['about']              = About::select('id', 'title', 'description', 'photo')->first();
        $data['folower']            = Folower::where('status', 1)->select('id', 'link', 'icon')->latest()->get();
        // Seo
        $seo                        =  Seo::all();
        $actual_link                = "http:://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $home_link                  = "http://$_SERVER[HTTP_HOST]";
        $home_title                 = $seo[0]['title'];
        $home_keywards              = $seo[0]['keywords'];
        $home_photo                 = $home_link . "/" . $seo[0]['photo'];

        $home_share_title           = $seo[0]['share_title'];
        $home_description           = $seo[0]['description'];
        SEOMeta::setTitle($home_title);
        SEOMeta::setDescription($home_description);
        SEOMeta::setCanonical($actual_link);
        SEOMeta::addKeyword($home_keywards);

        OpenGraph::setDescription($home_description);
        OpenGraph::setTitle($home_share_title);
        OpenGraph::setUrl($actual_link);
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addImage($home_photo);

        TwitterCard::setTitle($home_share_title);
        TwitterCard::setSite('@imzueyl');

        JsonLd::setTitle($home_title);
        JsonLd::setDescription($home_description);
        JsonLd::addImage($home_photo);
        return view('fontend.contact.index', $data, compact('seo'));
    }
}
