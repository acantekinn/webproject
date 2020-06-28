<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to My World';
        //return view ('pages.index', compact('title'));
        return view ('pages.index')->with('title', $title);
    }


    public function about()
    {
        $title = 'About Me';
        return view ('pages.about')->with('title', $title);
    }

    public function services()
    {
        $data = array
        (
            'title' => 'Contact',
            'services' => ['Name: Abdullah Can TEKIN', 'College: Kocaeli University', 'Department: Information Systems Engineering', 'E-mail: abdullahcant78@gmail.com', 'Number: +905392125517']
        );
        return view ('pages.services')->with($data);
    }

}
