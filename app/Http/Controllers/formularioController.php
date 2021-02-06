<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('formulario');
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
        request()->validate([
            'name' => 'required',
            'cif' => 'required',
            'address' => 'required',
            'city' => 'required',
            'telephone1' => 'required',
            'telephone2' => 'required',
            'email' => 'required',
            'sector' => 'required',
            'activity' => 'required',
            'owner' => 'required',
            'nameRepresentative' => 'required',
            'nif' => 'required',
            'centername' => 'required',
            'centeradress' => 'required',
            'poblation' => 'required',
            'cp' => 'required',
            'activity' => 'required',
            'number' => 'required',
            'email' => 'required',
            'telephonecenter1' => 'required',
            'telephonecenter2' => 'required',
            'workingtime' => 'required',
            'schedule' => 'required',
            'namecoordinatorfct' => 'required',
            'nametutor' => 'required',
            'niftutor' => 'required',
            'workplace' => 'required'
        ]);
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
