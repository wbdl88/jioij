<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function home()
    {
        return view('statics.home');
    }
        public function help()
    {
        return view('statics.help');
    }
        public function abode()
    {
        return view('statics.about');
    }

}
