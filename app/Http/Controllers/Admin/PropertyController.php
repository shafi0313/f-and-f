<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        DB::beginTransaction();
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = imgWebpStore($request->image, 'property', [360, 260]);
        }

        $property = Property::create($data);
        if ($request->has('doc_name') && !empty($request->doc_name) && !empty($request->doc_image)) {
            foreach ($request->doc_name as $key => $doc_name) {
                $room = [
                    'property_id' => $property->id,
                    'name'        => $doc_name,
                    'description' => $request->doc_description[$key],
                ];
                $room['image'] = imgWebpStore($request->doc_image[$key], 'room', [360, 260]);
                Room::create($room);
            }
        }

        try {
            DB::commit();
            return response()->json(['message' => 'The information has been inserted'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
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
            $property = Property::with('rooms')->find($property->id);
            $modal = view('admin.property.edit')->with(['property' => $property])->render();
            return response()->json(['modal' => $modal], 200);
        }
        return abort(500);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UpdatePropertyRequest $proRequest, Property $property)
    {
        if ($error = $this->authorize('property-add')) {
            return $error;
        }
        try {
            $validatedData = $proRequest->validated();

            $property = Property::findOrFail($property->id);
            $property->update($validatedData);

            $existingImages = $property->image;

            if ($proRequest->hasFile('image')) {
                $imagePath = imgWebpUpdate($proRequest->file('image'), 'property', [360, 260], $existingImages);
                $property->update(['image' => $imagePath]);
            }

            if ($request->has('doc_name')) {
                foreach ($request->doc_name as $key => $doc_name) {
                    // if (!empty($request->room_id[$key])) {
                    //     $room = Room::find($request->room_id[$key]);
                    //     $roomData = [
                    //         'property_id' => $property->id,
                    //         'name'        => $doc_name,
                    //         'description' => $request->doc_description[$key],
                    //     ];
                    //     if ($request->doc_image[$key]) {
                    //         $roomData['image'] = imgWebpUpdate($request->doc_image[$key], 'room', [360, 260], $room->image);
                    //     }
                    //     $room->update($roomData);
                    // } else {
                    //     return $request;
                    $roomData = [
                        'property_id' => $property->id,
                        'name'        => $doc_name,
                        'description' => $request->doc_description[$key],
                    ];

                    if ($request->doc_image[$key]) {
                        $roomData['image'] = imgWebpStore($request->doc_image[$key], 'room', [360, 260]);
                    }
                    Room::create($roomData);
                    // }
                }
            }

            return response()->json(['message' => 'The information has been updated'], 200);
        } catch (\Exception $e) {
            return $e->getMessage();
            return response()->json(['message' => 'Oops something went wrong, Please try again'], 500);
        }
    }

    public function roomDestroy(Request $request)
    {
        if ($error = $this->authorize('property-delete')) {
            return $error;
        }
        $room = Room::find($request->id);
        imgUnlink('room', $room->image);
        $room->delete();
        return response()->json(['message' => 'The information has been deleted'], 200);
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
            $rooms = Room::where('property_id', $property->id)->get();
            foreach ($rooms as $room) {
                imgUnlink('room', $room->image);
                $room->delete();
            }
            $property->delete();
            return response()->json(['message' => 'The information has been deleted'], 200);
        } catch (\Exception $e) {
            return $e->getMessage();
            return response()->json(['message' => 'Oops something went wrong, Please try again'], 500);
        }
    }
}
