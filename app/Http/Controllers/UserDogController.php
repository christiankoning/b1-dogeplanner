<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use App\Http\Requests\StoreDogRequest;
use App\Http\Requests\UpdateDogRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UserDogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get the user id of the logged-in user
        $userId = Auth::id();

        // Get the latest created dogs of the user
        $data = dog::all()
            ->where('id_user', $userId);

        return view('/profile.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/dog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDogRequest $request)
    {
        // validate if all the fields are filled in
        $request->validate([
            'name' => 'required|min:2|max:64',
            'race' => 'required|min:2|max:128',
            'age' => 'required|max:2',
            'weight' => 'required|max:2',
            'notes' => 'max:256',
            'img' => 'image|mimes:jpg,png,jpeg|max:200',
        ]);

        // Removes the data:image/png;base64 from the filename
        $image = str_replace('data:image/png;base64,', '', $request->filename);
        $image = str_replace(' ', '+', $image);
        // Generates an unique name for the image with a .png after it
        $imageName = uniqid().'.'.'png';
        // Uploads image to the storage/public/image directory
        \File::put(storage_path('app/public/image'). '/' . $imageName, base64_decode($image));

        // Get the user id of the logged-in user
        $userId = Auth::id();

        // Create a new dog
        $dog = new Dog;

        // Sets data of the dog
        $dog->name = $request['name'];
        $dog->race = $request['race'];
        $dog->age = $request['age'];
        $dog->weight = $request['weight'];
        $dog->notes = $request['notes'];
        $dog->id_user = $userId;
        $dog->img = $imageName;

        // Upload data to the database
        $dog->save();

        return redirect()->route('profile.index')
            ->with('Gefeliciteerd!','Hond toegevoegd!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function show(Dog $dog)
    {
        $userId = Auth::id();
        if($userId != $dog->id_user){
            return redirect()->route('profile.index');
        }
        return view('/dog.show',compact('dog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function edit(Dog $dog)
    {
        $userId = Auth::id();
        if($userId != $dog->id_user){
            return redirect()->route('profile.index');
        }
        return view('/dog.edit',compact('dog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDogRequest  $request
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDogRequest $request,$id)
    {
        $request->validate([
            'name' => 'required|min:2|max:64',
            'race' => 'required|min:2|max:128',
            'age' => 'required|max:2',
            'weight' => 'required|max:2',
            'notes' => 'max:256',
        ]);

        $dog = Dog::find($id);

        $request['updated_at'] = Carbon::now()->toDateTimeString();
        if($image = $request->file('img')){
            $request->validate([
                'img' => 'image|mimes:jpg,png,jpeg|max:200',
            ]);
            $destinationPath = 'app/public/image/';
            // Removes the data:image/png;base64 from the filename
            $images = str_replace('data:image/png;base64,', '', $request->filename);
            $images = str_replace(' ', '+', $images);
            $imageName = uniqid().'.'.'png';
            // Uploads image to the storage/public/image directory
            \File::put(storage_path('app/public/image'). '/' . $imageName, base64_decode($images));

            $request['img'] = $imageName;
            $dog->img = $imageName;
        }

        // Sets data of the dog
        $dog->name = $request['name'];
        $dog->race = $request['race'];
        $dog->age = $request['age'];
        $dog->weight = $request['weight'];
        $dog->notes = $request['notes'];

        // Upload data to the database
        $dog->save();

        return redirect()->route('profile.index')
            ->with('Gefeliciteerd!','Hond aangepast!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dog $dog)
    {
        // Delete dog
        $dog->delete();

        return redirect()->route('profile.index')
            ->with('Gefeliciteerd!','Hond verwijderd!.');
    }
}
