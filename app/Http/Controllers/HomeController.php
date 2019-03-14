<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SlideShow;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
    	$list_slide = SlideShow::all();
    	$data = compact('list_slide');
        return view('menu.home',$data);
    }

}
