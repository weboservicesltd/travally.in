<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use Illuminate\Support\Facades\Validator;
use LucaDegasperi\OAuth2Server\Facades\Authorizer;
=======
>>>>>>> parent of 11e34d6... added booking flight details transformer and make one to many relationship between user and booking flight details

class FlightBookingDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
<<<<<<< HEAD
        $user_id=Authorizer::getResourceOwnerId(); // the token user_id
        $flightBookingDetails = User::find($user_id)->flightBookingDetails()->get();
        return $this->respond($this->FlightBookingDetailsTransformer->transformCollection($flightBookingDetails->toArray()));
        //return User::find($user_id)->flightBookingDetails()->get();
=======
>>>>>>> parent of 11e34d6... added booking flight details transformer and make one to many relationship between user and booking flight details
    }
//travally_user_flight_booking_details_source
//travally_user_flight_booking_details_source
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
