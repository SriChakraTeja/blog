<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getContact()
    {
        return view('pages.contact');
        //process vraible data or params
        // Talk to the model
        // Recieve from the model
        // Compile or process data from model if needed
        // Pass that data to correct view
    }

    public function getAbout()
    {
        $first = 'Sri';
        $last = 'Chakra';

        $fullname = $first." ".$last;
        $email = "stadikonda@gmail.com";
        //return view('pages.about')->with("email",$email);
        return view('pages.about')->with("fullname",$fullname);
    }

    public function getIndex()
    {
        return view('pages.welcome');
    }
}
