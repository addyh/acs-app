<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = "welcome";
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

}
