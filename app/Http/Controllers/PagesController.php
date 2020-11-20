<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function homePage()
    {
        return view('home');
    }

    public function aboutPage()
    {
        return view('about');
    }
    public function servicesPage()
    {
        return view('services.index');
    }
    public function servicePage()
    {
        return view('services.service');
    }
    public function teamPage()
    {
        return view('team');
    }
    public function blogPage()
    {
        return view('blog.index');
    }
    public function postPage()
    {
        return view('blog.post');
    }
    public function clientsPage()
    {
        return view('clients');
    }
    public function contactPage()
    {
        return view('contact');
    }
    public function demoPage()
    {
        return view('demo');
    }
}
