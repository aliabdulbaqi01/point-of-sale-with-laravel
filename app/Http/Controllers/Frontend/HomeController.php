<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Portfolio;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
     * return the page
     */
    public function index() {
        $slide = Slide::find(1);
        $about = About::find(1);
        $portfolios = Portfolio::get();
        return view('frontend.index', compact('slide', 'about', 'portfolios'));
    }
}
