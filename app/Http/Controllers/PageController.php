<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\About;
use App\Models\Service;
use App\Models\Blog;
use App\Models\ProjectCat;
use App\Models\Project;
use App\Models\Faq;
use App\Models\Carrier;
use App\Models\Testimonial;
use App\Models\Team;
use App\Models\GalleryImage;
use App\Models\GalleryAlbum;
use App\Models\MetaTags;
use App\Models\Partner;
use App\Models\Event;
use App\Models\Visa;
use App\Models\Counter;

class PageController extends Controller
{
    public function homePage () {
        $sliders = Slider::orderBy('updated_at','desc')->get();
        $galleries = GalleryAlbum::take(6)->get();
        $bannerServices = Service::orderBy('position','asc')->take(4)->get();
        $services = Service::orderBy('position','asc')->take(4)->get();
        $blogs = Blog::orderBy('updated_at','desc')->get();
        $projects = Project::all();
        $faqs = Faq::orderBy('updated_at','desc')->get();
        $testimonials = Testimonial::all();
        $partners = Partner::all();
        $events = Event::all();
        $teams = Team::all();
        $abouts = About::all();
        $counters = Counter::all();
        $metatag = MetaTags::where('page','home_page')->get()->first();
        return view('client.index')->with(['sliders'=> $sliders,'abouts'=>$abouts,'galleries' => $galleries,'services'=>$services,'blogs' => $blogs,'projects'=>$projects,'faqs'=>$faqs,'testimonials'=>$testimonials,'metatag'=> $metatag,'bannerServices' => $bannerServices,'partners' => $partners, 'events'=>$events, 'teams'=>$teams,'counters'=>$counters]);
    }

    public function loginPage () {
        return view('auth.login');
    }

    public function registerPage () {
        return view('auth.register');
    }

    public function carrierPage(){
        $metatag = MetaTags::where('page','carrier_page')->get()->first();
        $jobCarriers = Carrier::where('status','active')->get();
        return view('client.carrier',compact('jobCarriers','metatag'));
    }

    public function eventPage() {
        $events=Event::all();
        return view('client.event', compact('events'));
    }

    public function eventDetailPage($slug) {
        $event=Event::where("slug",$slug)->first();
        $events=Event::take(3)->get();
        return view('client.event-details', compact('event', 'events'));
    }

    public function coursePage() {
        return view('client.course');
    }

    public function courseDetailPage() {
        return view('client.course-details');
    }

    public function academicPage() {
        return view('client.academic');
    }

    public function academicDetailPage() {
        return view('client.academic-details');
    }

    public function graduateAddmissionPage () {
        return view('client.graduate-addmission');
    }

    public function dashboard() {
         return view('admin.dashboard');
    }

    public function servicePage() {
         $metatag = MetaTags::where('page','blog_page')->get()->first();
         $services = Service::all();
         $visas = Visa::all();
         return view('client.service')->with(['services'=>$services,'metatag' => $metatag, 'visas'=>$visas]);
    }

    public function blogPage() {
         $metatag = MetaTags::where('page','blog_page')->get()->first();
         $blogs = Blog::orderBy('updated_at','desc')->get();
         return view('client.blog')->with(['blogs'=>$blogs, 'metatag'=> $metatag]);
    }

    public function galleryPage(){
        $metatag = MetaTags::where('page','gallery_page')->get()->first();
        $galleries = GalleryAlbum::paginate(2);
        return view('client.gallery')->with(['galleries'=>$galleries,'metatag' => $metatag]);
    }
     
    public function galleryImage($slug) {
        $images = galleryImage::where('album_slug',$slug)->paginate(9);
        return view('client.gallery-image',compact('images','slug'));
    }

    public function aboutPage () {
        $abouts = About::all();
        $teams = Team::all();
        $testimonials = Testimonial::all();
        $partners = Partner::all();
        $metatag = MetaTags::where('page','about_page')->get()->first();
        return view('client.about',compact('teams','metatag','testimonials','abouts','partners'));
    }

    public function contactPage() {
        $metatag = MetaTags::where('page','contact_page')->get()->first();
        return view('client.contact',compact('metatag'));
    }

    public function thankYouPage() {
        return view('client.thank_you');
    }

    public function lengthConverter() {
        $metatag = MetaTags::where('page','length_converter_page')->get()->first();
        return view('client.length-converter');
    }

    public function projectPage() {
        $projects = Project::paginate(9);
        $metatag = MetaTags::where('page','project_page')->get()->first();
        return view('client.projects',compact('projects','metatag'));
    }
}
