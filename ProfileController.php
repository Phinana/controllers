<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // sum of donation
        // water well project count 
        // sacrifice amount
        // how much people helped
        // completed projects

        // will be returned
    }

    public function getUsersWaterWell($id)
    {
        // water well - user
    }

    public function getUsersSacrifice($id)
    {
        // sacrifices - user
    }

    public function getUsersDonate($id)
    {
        // donation of user
    }

    public function getUserHowManyPeopleHelped($id)
    {
        // helped people
    }

    public function getUserFinishedWaterWell($id)
    {
        // water wells named by user
    }

    public function getUserAllProjects($id)
    {
        // all type of project user has
        // how many people were helping in a year calculation
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
