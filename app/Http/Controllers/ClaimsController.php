<?php

namespace App\Http\Controllers;

use App\Models\Claims;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ClaimsController extends Controller
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
        // dd($request->all());
        Validator::make($request->all(),[
            "policy" => ['required'],
            "incident_date" => ['required','date'],
            "description" => ['required','string'],
        ])->validate();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Claims  $claims
     * @return \Illuminate\Http\Response
     */
    public function show(Claims $claims)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Claims  $claims
     * @return \Illuminate\Http\Response
     */
    public function edit(Claims $claims)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Claims  $claims
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Claims $claims)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Claims  $claims
     * @return \Illuminate\Http\Response
     */
    public function destroy(Claims $claims)
    {
        //
    }
}
