<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    function index()
    {
        return view('index');
    }
     function about()
    {
        return view('about' , ["PageTitle" => 'about from Controller']);
    }
     function contact()
    {
        return view('contactus' ,["PageTitle" => 'Contact from Controller']);
    }
}
