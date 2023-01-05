<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('pages.x1home');
    }
    public function pageindex($pageslug = 'x1home')
    {

        $pageview = 'pages.' . $pageslug;

        if (View::exists($pageview)) {
            return view($pageview);
        } else {
            return view('pages.x1error404');
        }
        // if (View::exists($pageslug)) {
        //     return view($pageslug);
        // } else {
        //     return view('pages.x1error404');
        // }
    }
    // public function about()
    // {
    //     return view('pages.home');
    // }
    // public function home()
    // {
    //     return view('pages.home');
    // }
    // public function home()
    // {
    //     return view('pages.home');
    // }
    // public function home()
    // {
    //     return view('pages.home');
    // }
}
