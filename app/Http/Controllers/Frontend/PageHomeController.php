<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;

class PageHomeController extends Controller
{
    public function index(){
        $slider = Slider::where('status', '1')->first();

        return view('welcome',compact('slider'));
    }
}
