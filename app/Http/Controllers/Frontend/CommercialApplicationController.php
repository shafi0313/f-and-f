<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CommercialApplication;
use App\Http\Requests\StoreCommercialApplicationRequest;
use App\Http\Requests\UpdateCommercialApplicationRequest;

class CommercialApplicationController extends Controller
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
        return view('frontend.commercial-application');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommercialApplicationRequest $request)
    {
        $data = $request->validated();

        try {
            CommercialApplication::create($data);
            return response()->json(['message' => 'The information has been inserted'], 200);
        } catch (\Exception $e) {
            return $e->getMessage();
            return response()->json(['message' => 'Oops something went wrong, Please try again.'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CommercialApplication $commercialApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CommercialApplication $commercialApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommercialApplicationRequest $request, CommercialApplication $commercialApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CommercialApplication $commercialApplication)
    {
        //
    }
}
