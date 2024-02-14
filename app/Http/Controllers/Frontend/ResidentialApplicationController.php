<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ResidentialApplication;
use App\Http\Requests\StoreResidentialApplicationRequest;
use App\Http\Requests\UpdateResidentialApplicationRequest;

class ResidentialApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.residential-application');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResidentialApplicationRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('income_cer')) {
            $data['income_cer'] = imgWebpStore($request->income_cer, 'application');
        }
        // if ($request->hasFile('signature1')) {
        //     $data['signature1'] = imgWebpStore($request->signature1, 'application');
        // }
        // if ($request->hasFile('signature2')) {
        //     $data['signature2'] = imgWebpStore($request->signature2, 'application');
        // }
        // if ($request->hasFile('signature3')) {
        //     $data['signature3'] = imgWebpStore($request->signature3, 'application');
        // }

        try {
            ResidentialApplication::create($data);
            return response()->json(['message' => 'The information has been inserted'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Oops something went wrong, Please try again.'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ResidentialApplication $residentialApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ResidentialApplication $residentialApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResidentialApplicationRequest $request, ResidentialApplication $residentialApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ResidentialApplication $residentialApplication)
    {
        //
    }
}
