<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ToolkitUser;
use Illuminate\Http\Request;

class ToolkitUserController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $toolkitUsers = ToolkitUser::all();
        return response() -> json( [
            'products' => $toolkitUsers
        ] );
    }

    /**
    * Login with credentials
    *
    * @param  \Illuminate\Http\Request  $request
    * @return  \Illuminate\Http\Response
    */

    public function login( Request $request ) {
        error_log( 'in controller' );
        return response( 'Login success', 200 );
    }

    /**
    * Register with credentials
    *
    * @param  \Illuminate\Http\Request  $request
    * @return  \Illuminate\Http\Response
    */

    public function register( Request $request ) {
        error_log( 'up controller' );
        return response( 'Register success', 200 );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $toolkitUser = ToolKitUser::create( $request->all() );

        return response()->json( [
            'message' => 'new user saved successfully',
            'user' => $toolkitUser
        ], 200 );
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\ToolkitUser  $toolkitUser
    * @return \Illuminate\Http\Response
    */

    public function show( ToolkitUser $toolkitUser ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\ToolkitUser  $toolkitUser
    * @return \Illuminate\Http\Response
    */

    public function edit( ToolkitUser $toolkitUser ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\ToolkitUser  $toolkitUser
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, ToolkitUser $toolkitUser ) {
        $toolkitUser->update( $request->all() );

        return response()->json( [
            'message' => 'updated successfully!',
            'user' => $toolkitUser
        ], 200 );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\ToolkitUser  $toolkitUser
    * @return \Illuminate\Http\Response
    */

    public function destroy( ToolkitUser $toolkitUser ) {
        $toolkitUser->delete();

        return response() ->json( [
            'message' => 'successfully deleted!'
        ], 200 );
    }
}
