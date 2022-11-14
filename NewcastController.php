<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // only certain amount news will be fetched
    }

    public function getNewcasts($amount, $queue)
    {
        // that function returns 6 newcast
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // when newcast clicked, this will be return newcast details
    }
}
