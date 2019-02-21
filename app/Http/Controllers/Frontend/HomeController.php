<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\Frontend\SlideShowRepository;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
	public function __construct(SlideShowRepository $slide){
		$this->slide = $slide;
	}
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
    	$list_slide = $this->slide->get();
    	$data = compact('list_slide');
        return view('menu.home',$data);
    }
}
