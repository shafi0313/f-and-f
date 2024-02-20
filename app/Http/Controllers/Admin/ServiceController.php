<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($error = $this->authorize('service-manage')) {
            return $error;
        }

        if ($request->ajax()) {
            $services = Service::query();
            return DataTables::of($services)
                ->addIndexColumn()
                ->addColumn('image', function ($row) {
                    $path = imagePath('service', $row->image);
                    return '<img src="' . $path . '" width="70px" alt="image">';
                })
                ->addColumn('is_active', function ($row) {
                    if (userCan('service-edit')) {
                        return view('button', ['type' => 'is_active', 'route' => route('admin.services.is_active', $row->id), 'row' => $row->is_active]);
                    }
                })
                ->addColumn('action', function ($row) {
                    $btn = '';
                    if (userCan('service-edit')) {
                        $btn .= view('button', ['type' => 'ajax-edit', 'route' => route('admin.services.edit', $row->id), 'row' => $row]);
                    }
                    if (userCan('service-delete')) {
                        $btn .= view('button', ['type' => 'ajax-delete', 'route' => route('admin.services.destroy', $row->id), 'row' => $row, 'src' => 'dt']);
                    }
                    return $btn;
                })
                ->rawColumns(['content', 'image', 'is_active', 'action'])
                ->make(true);
        }
        return view('admin.service.index');
    }

    function status(service $service)
    {
        if ($error = $this->authorize('service-edit')) {
            return $error;
        }
        $service->is_active = $service->is_active  == 1 ? 0 : 1;
        try {
            $service->save();
            return response()->json(['message' => 'The status has been updated'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Oops something went wrong, Please try again.'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        if ($error = $this->authorize('service-add')) {
            return $error;
        }
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = imgPngStore($request->image, 'service');
        }

        try {
            Service::create($data);
            return response()->json(['message' => 'The information has been inserted'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Oops something went wrong, Please try again.'], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Service $service)
    {
        if ($error = $this->authorize('service-edit')) {
            return $error;
        }
        if ($request->ajax()) {
            $modal = view('admin.service.edit')->with(['service' => $service])->render();
            return response()->json(['modal' => $modal], 200);
        }
        return abort(500);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        if ($error = $this->authorize('service-add')) {
            return $error;
        }
        $data = $request->validated();
        $image = $service->image;
        if ($request->hasFile('image')) {
            $data['image'] = imgPngUpdate($request->image, 'service', [null, null], $image);
        }
        try {
            $service->update($data);
            return response()->json(['message' => 'The information has been updated'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Oops something went wrong, Please try again'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        if ($error = $this->authorize('service-delete')) {
            return $error;
        }
        try {
            imgUnlink('service', $service->image);
            $service->delete();
            return response()->json(['message' => 'The information has been deleted'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Oops something went wrong, Please try again'], 500);
        }
    }
}
