<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('pages.home');
    }
    function about()
    {
        return view('pages.about');
    }
    function contact()
    {
        return view('pages.contact');
    }
    function product()
    {
        return view('pages.products');
    }
    function teams()
    {
        $name = "Hridoy";
        $id="19-40101-1";
        $dob = "17-03-1998";
        $names=array("mansib", "Saharir");
       
        return view('pages.teams')
        ->with('name', $name)
        ->with('id', $id)
        ->with('dob', $dob)
        ->with('names', $names);;
    }
}
