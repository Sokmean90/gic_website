<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
class FAQsController extends Controller
{
    //
    public function index()
    {
    	$list_faq = Faq::all();
    	$data = compact('list_faq');
        return view('menu.faq',$data);
    }
}
