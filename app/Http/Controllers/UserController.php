<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dog;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Doctrine\Inflector\GenericLanguageInflectorFactory;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $dogs = Dog::all();
        return view('admin/admin-user/index', compact('users', 'dogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = "create";
        $adminuser = [];
        return view('admin/admin-user/create')->with(compact('adminuser'))->with(compact("form"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->telephone = $request->telephone;
        $user->street_name = $request->street_name;
        $user->house_number = $request->house_number;
        $user->postal_code = $request->postal_code;
        $user->isAdmin = $request->admin === "true" ? true : false;
        $user->password = Hash::make($request->newPassword);

        $user->save();

        return redirect(route('user.show', $user->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $dogs = Dog::all()
            ->where('id_user', $user->id);
        return view('admin/admin-user/show', compact('user', 'dogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $form = "edit";
        return view('admin/admin-user/update')->with(compact("user"))->with(compact("form"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->telephone = $request->telephone;
        $user->street_name = $request->street_name;
        $user->house_number = $request->house_number;
        $user->postal_code = $request->postal_code;
        $user->isAdmin = $request->admin === "true" ? true : false;

        $user->save();

        return redirect(route('user.show', $user->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('user.index'));
    }
}
