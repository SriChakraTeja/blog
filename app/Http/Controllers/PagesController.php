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
        $firstname = "Sri";
        $lastname = "Chakra";
        $fullName = $firstname." ".$lastname;
        $email = 'stadikonda@gmail.com';
        $data = [];
        $data['email'] = $email;
        $data['fullName'] = $fullName;
        return view('pages.about',compact('data'));
    }

    public function getIndex()
    {
        return view('pages.welcome');
    }
}
