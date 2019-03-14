<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScholarshipControler extends Controller
{
    public function index(){
        $img = '/assets/img-temp/100x100/img5.jpg';
        return view('frontend.scholarship.scholarship', compact('img'));
    }
}
