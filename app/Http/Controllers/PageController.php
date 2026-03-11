<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function blogDetail()
    {
        return view('frontend.blog-detail');
    }
    public function service()
    {
        return view('frontend.service');
    }
    public function serviceDetail()
    {
        return view('frontend.service-detail');
    }
    public function solution()
    {
        return view('frontend.solution');
    }
    public function solutionDetail()
    {
        return view('frontend.solution-detail');
    }
    public function casestudy()
    {
        return view('frontend.casestudy');
    }
     public function faq(){
        return view('frontend.faq');
    }
     public function job(){
        return view('frontend.job');
    }
     public function policy(){
        return view('frontend.policy');
    }
     public function team(){
        return view('frontend.team');
    }
     public function industryServe(){
        return view('frontend.industry-serve');
    }
}
