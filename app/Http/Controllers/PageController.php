<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Casestudy;
use App\Models\Certification;
use App\Models\Collaborator;
use App\Models\Faq;
use App\Models\IndustryServe;
use App\Models\Job;
use App\Models\Policy;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Solution;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        $services = Service::latest()->take(6)->get();
        $solutions = Solution::latest()->take(6)->get();
        $casestudies = Casestudy::latest()->take(6)->get();
        $industries = IndustryServe::latest()->take(6)->get();
        $collaborator = Collaborator::all();
        $blogs = Blog::latest()->take(3)->get();
        $testimonials = Testimonial::latest()->get();
        return view('frontend.index',compact('sliders','services','solutions','casestudies','industries','collaborator','blogs','testimonials'));
    }
    public function about()
    {
        $testimonials = Testimonial::latest()->get();
        $certificates = Certification::all();
        return view('frontend.about',compact('testimonials','certificates'));
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function blog()
    {
        $blogs = Blog::latest()->get();
        return view('frontend.blog',compact('blogs'));
    }
    public function blogDetail($slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        return view('frontend.blog-detail',compact('blog'));
    }
    public function service()
    {
        $services = Service::all();
        return view('frontend.service',compact('services'));
    }
    public function serviceDetail($slug)
    {
        $service = Service::where('slug',$slug)->first();
        return view('frontend.service-detail',compact('service'));
    }
    public function solution()
    {
        $solutions = Solution::all();
        return view('frontend.solution',compact('solutions'));
    }
    public function solutionDetail($slug)
    {
        $solution = Solution::where('slug',$slug)->first();
        return view('frontend.solution-detail',compact('solution'));
    }
    public function casestudy()
    {
        $casestudies = Casestudy::latest()->get();
        return view('frontend.casestudy',compact('casestudies'));
    }
        public function casestudyDetail($slug)
    {
        $casestudy = Casestudy::where('slug',$slug)->first();
        return view('frontend.casestudy-detail',compact('casestudy'));
    }
     public function faq()
     {
        $faqs = Faq::where('type','main')->get();
        return view('frontend.faq',compact('faqs'));
    }
     public function job(){
        $jobs = Job::where('status','active')->latest()->get();
        $faqs = Faq::where('type','career')->get();
        return view('frontend.job',compact('jobs','faqs'));
    }
     public function policy($slug)
     {
       $policy = Policy::where('slug',$slug)->first();
        return view('frontend.policy',compact('policy'));
    }
     public function team()
     {
        $teams = Team::all();
        return view('frontend.team',compact('teams'));
    }
     public function industryServe()
     {
        $industries = IndustryServe::all();
        return view('frontend.industry-serve',compact('industries'));
    }
}
