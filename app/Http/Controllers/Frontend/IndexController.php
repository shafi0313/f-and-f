<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Room;

class IndexController extends Controller
{
    public function index()
    {
        $data['sliders'] = Slider::where('is_active', 1)->get();
        $data['properties'] = Property::whereType(1)->where('is_active', 1)->get();
        return view('frontend.index', $data);
    }

    public function property()
    {
        $properties = Property::whereType(1)->where('is_active', 1)->get();
        return view('frontend.property', compact('properties'));
    }

    public function propertyDetail(Property $property)
    {
        $rooms = Room::where('property_id', $property->id)->get();
        return view('frontend.property-room', compact('property', 'rooms'));
    }
}
