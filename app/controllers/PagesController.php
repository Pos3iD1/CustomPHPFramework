<?php

namespace App\Controllers;

class PagesController
{
    public static function home()
    {
        return view('index');
    }

    public static function about()
    {
        return view('about');
    }

    public static function contact()
    {
        return view('contact');
    }
}
