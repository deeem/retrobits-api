<?php

namespace App\Http\Controllers\v1;

use App\Http\Resources\PlatformResource;
use App\Platform;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return PlatformResource::collection(Platform::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function show(Platform $platform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function edit(Platform $platform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platform $platform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function destroy(Platform $platform)
    {
        //
    }
}