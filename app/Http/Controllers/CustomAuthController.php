<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Helper\Table;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                ->withSuccess('Signed in');
        }

        return redirect("login")->with('invalid', 'Login gegevens zijn niet geldig');
    }



    public function registration()
    {
        return view('auth.registration');
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'telephone' => 'required',
            'street_name' => 'required',
            'house_number' => 'required|max:5',
            'postal_code' => 'required|max:6',
            'password' => 'required|min:6',

        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("/")->with('success', 'Je bent nu ingelogd!');
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'telephone' => $data['telephone'],
            'street_name' => $data['street_name'],
            'house_number' => $data['house_number'],
            'postal_code' => $data['postal_code'],
            'password' => Hash::make($data['password'])
        ]);
    }


    public function dashboard()
    {
        if(Auth::check()){
            return view('/');
        }

        return redirect("login")->with('not_registered', 'Je account is niet geregistreerd');
    }


    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }


}
