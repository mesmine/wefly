<?php

namespace App\Http\Controllers;

use App\Reservations;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'date'        => 'rrequired',
            'etat' => 'required',
        ]);

        $reservation = new Reservations([
            'etat' => $request->get('etat'),
            'numero' => $request->get('numero'),
            'clientid' => $request->get('clientid'),
            'volid' => $request->get('volid')
        ]);
        $reservation->save();
//        $reservation = Reservations::create([
//
//            'etat' => request('etat'),
//            'numero' => request('numero'),
//            'clientid' => request('clientid'),
//            'volid' => request('volid')
//        ]);
        return response()->json([
            'reservation'    => $reservation,
            'message' => 'Success'
        ], 200);
//        return response()->json([
//            'reservation'    => $reservation,
//            'message' => 'Success'
//        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function show(Reservations $reservations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservations $reservations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservations $reservations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservations $reservations)
    {
        //
    }
}
