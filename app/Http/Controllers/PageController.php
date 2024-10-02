<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('editcrew.pages.index');
    }

    public function about()
    {
        return view('editcrew.pages.about');
    }

    public function blog()
    {
        return view('editcrew.pages.blog');
    }

    public function pricing()
    {
        return view('editcrew.pages.pricing');
    }

    public function privacy()
    {
        return view('editcrew.pages.terms.privacy');
    }

    public function terms()
    {
        return view('editcrew.pages.terms.terms');
    }

    public function holidays()
    {
        return view('editcrew.pages.observed-holidays');
    }

    public function booking()
    {
        return view('editcrew.pages.action.book');
    }

    public function careers()
    {
        return view('editcrew.pages.action.careers');
    }

    public function ourWork()
    {
        return view('editcrew.pages.our-work');
    }

    public function scope()
    {
        return view('editcrew.pages.scop');
    }

    public function videoEditingServices()
    {
        return view('editcrew.pages.video-editing-services');
    }
}
