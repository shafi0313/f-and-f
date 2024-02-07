<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $data['sliders'] = Slider::where('is_active', 1)->get();
        return view('frontend.index', $data);
    }
}
