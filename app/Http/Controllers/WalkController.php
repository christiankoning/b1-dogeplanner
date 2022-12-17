<?php

namespace App\Http\Controllers;

use App\Models\Walk;
use App\Http\Requests\StoreWalkRequest;
use App\Http\Requests\UpdateWalkRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class WalkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get the latest created walks of the user and show 5 walks per page
        $data = walk::all();

        $acceptedWalks = $data->where('status','accepted');
        $pendingWalks = $data->where('status','pending');
        $deniedWalks = $data->where('status','denied');

        return view('admin/walks.index',compact('pendingWalks'))->with(compact('acceptedWalks'))->with(compact('deniedWalks'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    return view('admin/walks.create');
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWalkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWalkRequest $request)
    {
        // Get the user id of the logged-in user
        $userId = Auth::id();

        $request->validate([
            'date' => 'required|date_format:d-m-Y|after:yesterday',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'amount_dogs' => 'required|numeric',
            'location' => 'required',
        ]);

        // Set the user id
        $request['id_user'] = $userId;

        $request['date'] = Carbon::parse($request['date'])->format('Y-m-d');
        $request['start_time'] = Carbon::parse($request['start_time'])->format('H:i:s');
        $request['end_time'] = Carbon::parse($request['end_time'])->format('H:i:s');

        walk::create($request->all());

        return redirect()->route('walks.index')
            ->with('Gefeliciteerd!','Wandeling aangemaakt!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Walk  $walk
     * @return \Illuminate\Http\Response
     */
    public function show(Walk $walk)
    {
        return view('admin/walks.show',compact('walk'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Walk  $walk
     * @return \Illuminate\Http\Response
     */
    public function edit(Walk $walk)
    {
        return view('admin/walks.edit',compact('walk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWalkRequest  $request
     * @param  \App\Models\Walk  $walk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWalkRequest $request, Walk $walk)
    {
        $request->validate([
            'date' => 'required|date_format:d-m-Y|after:yesterday',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'amount_dogs' => 'required|numeric',
            'location' => 'required',
        ]);

        $request['date'] = Carbon::parse($request['date'])->format('Y-m-d');
        $request['start_time'] = Carbon::parse($request['start_time'])->format('H:i:s');
        $request['end_time'] = Carbon::parse($request['end_time'])->format('H:i:s');

        $request['updated_at'] = Carbon::now()->toDateTimeString();

        $walk->update($request->all());

        return redirect()->route('walks.index')
            ->with('Gefeliciteerd!','Wandeling geaccepteerd!.');
    }

    public function accept(Walk $walk)
    {
        $walk['updated_at'] = Carbon::now()->toDateTimeString();
        $walk['status'] = "accepted";

        $walk->save();

        return redirect()->route('walks.index')
            ->with('Gefeliciteerd!','Wandeling aangepast!.');
    }

    public function denied(Walk $walk)
    {
        $walk['updated_at'] = Carbon::now()->toDateTimeString();
        $walk['status'] = "denied";

        $walk->save();

        return redirect()->route('walks.index')
            ->with('Gefeliciteerd!','Wandeling geweigerd!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Walk  $walk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Walk $walk)
    {
        $walk->delete();

        return redirect()->route('walks.index')
            ->with('Gefeliciteerd!','Wandeling verwijderd!.');

    }
}
