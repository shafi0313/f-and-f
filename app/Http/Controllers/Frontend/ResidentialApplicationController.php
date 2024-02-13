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
        //
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
