<?php

namespace App\Http\Controllers;

use App\Vols;
use Illuminate\Http\Request;

class VolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vols = Vols::get();
        return response()->json([
            'vols'    => $vols,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return response()->json([$request->all()]);
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
     * @param  \App\Vols  $vols
     * @return \Illuminate\Http\Response
     */
    public function show(Vols $vols)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vols  $vols
     * @return \Illuminate\Http\Response
     */
    public function edit(Vols $vols)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vols  $vols
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vols $vols)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vols  $vols
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vols $vols)
    {
        //
    }
}
