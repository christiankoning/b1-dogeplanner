<?php

namespace App\Http\Controllers;

use App\Models\PunchCard;
use App\Http\Requests\StorePunchCardRequest;
use App\Http\Requests\UpdatePunchCardRequest;

class PunchCardController extends Controller
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
     * @param  \App\Http\Requests\StorePunchCardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePunchCardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PunchCard  $punchCard
     * @return \Illuminate\Http\Response
     */
    public function show(PunchCard $punchCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PunchCard  $punchCard
     * @return \Illuminate\Http\Response
     */
    public function edit(PunchCard $punchCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePunchCardRequest  $request
     * @param  \App\Models\PunchCard  $punchCard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePunchCardRequest $request, PunchCard $punchCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PunchCard  $punchCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(PunchCard $punchCard)
    {
        //
    }
}
