<?php

namespace App\Http\Controllers;

use App\Land;
use Illuminate\Http\Request;

class LandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lands = Land::orderBy('land_id','desc')->get();
        return view('pages/index')->with('lands',$lands);
        //return view('pages/index');
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
     * @param  \App\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function show(Land $land)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function edit(Land $land)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Land $land)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function destroy(Land $land)
    {
        //
    }
}
