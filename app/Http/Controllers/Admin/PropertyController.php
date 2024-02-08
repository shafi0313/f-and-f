<?php

namespace App\Http\Controllers\Admin;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        if ($error = $this->authorize('property-manage')) {
            return $error;
        }

        if ($request->ajax()) {
            $properties = Property::query();
            return DataTables::of($properties)
                ->addIndexColumn()
                ->addColumn('image', function ($row) {
                    $path = imagePath('property', $row->image);
                    return '<img src="' . $path . '" width="70px" alt="image">';
                })
                ->addColumn('is_active', function ($row) {
                    if (userCan('property-edit')) {
                        return view('button', ['type' => 'is_active', 'route' => route('admin.properties.is_active', $row->id), 'row' => $row->is_active]);
                    }
                })
                ->addColumn('action', function ($row) {
                    $btn = '';
                    if (userCan('property-edit')) {
                        $btn .= view('button', ['type' => 'ajax-edit', 'route' => route('admin.properties.edit', $row->id), 'row' => $row]);
                    }
                    if (userCan('property-delete')) {
                        $btn .= view('button', ['type' => 'ajax-delete', 'route' => route('admin.properties.destroy', $row->id), 'row' => $row, 'src' => 'dt']);
                    }
                    return $btn;
                })
                ->rawColumns(['content', 'image', 'is_active', 'action'])
                ->make(true);
        }
        return view('admin.property.index');
    }

    function status(Property $property)
    {
        if ($error = $this->authorize('property-edit')) {
            return $error;
        }
        $property->is_active = $property->is_active  == 1 ? 0 : 1;
        try {
            $property->save();
            return response()->json(['message' => 'The status has been updated'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Oops something went wrong, Please try again.'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePropertyRequest $request)
    {
        if ($error = $this->authorize('property-add')) {
            return $error;
        }
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = imgWebpStore($request->image, 'property', [360, 260]);
        }

        try {
            Property::create($data);
            return response()->json(['message' => 'The information has been inserted'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Oops something went wrong, Please try again.'], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Property $property)
    {
        if ($error = $this->authorize('property-edit')) {
            return $error;
        }
        if ($request->ajax()) {
            $modal = view('admin.property.edit')->with(['property' => $property])->render();
            return response()->json(['modal' => $modal], 200);
        }
        return abort(500);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePropertyRequest $request, Property $property)
    {
        if ($error = $this->authorize('property-add')) {
            return $error;
        }
        $data = $property->validated();
        $image = $property->image;
        if ($request->hasFile('image')) {
            $data['image'] = imgWebpUpdate($request->image, 'property', [360, 260], $image);
        }
        try {
            $property->update($data);
            return response()->json(['message' => 'The information has been updated'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Oops something went wrong, Please try again'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        if ($error = $this->authorize('property-delete')) {
            return $error;
        }
        try {
            imgUnlink('property', $property->image);
            $property->delete();
            return response()->json(['message' => 'The information has been deleted'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Oops something went wrong, Please try again'], 500);
        }
    }
}
