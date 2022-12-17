@extends('layout.admin')

@section('css')
    <link href="{{asset('css/admin-user.css')}}" rel="stylesheet">
@endsection

@section('content')
    <main>
        <div class="title-div">
            <h2>Gebruiker aanpassen</h2>
            <a href="{{route('user.index')}}">Terug</a>
        </div>

        <form class="model" method="post" action="{{route('user.update',$user->id)}}">
            @csrf
            @method("PATCH")
            <div class="input-div">
                <label for="name">Naam</label><br>
                <input id="name" type="text" name="name" value="{{ empty(old('name')) ? $user->name : old('name') }}" placeholder="Jan Jansen">
                @error('name')
                    <p class="error">{{ $errors->first('name') }}</p>
                @enderror
            </div>
            <div class="input-div">
                <label for="email">Email</label><br>
                <input id="email" type="text" name="email" value="{{ empty(old('email')) ? $user->email : old('email') }}" placeholder="jan.jan@gmail.com">
                @error('email')
                    <p class="error">{{ $errors->first('email') }}</p>
                @enderror
            </div>
            <div class="input-div">
                <label for="telephone">Telefoon</label><br>
                <input id="telephone" type="tel" pattern="[0-9]{2}-[0-9]{8}" name="telephone" value="{{ empty(old('telephone')) ? $user->telephone : old('telephone') }}" placeholder="06-12345678">
                @error('telephone')
                    <p class="error">{{ $errors->first('telephone') }}</p>
                @enderror
            </div>
            <div class="input-div">
                <label for="street_name">Straatnaam</label><br>
                <input id="street_name" type="text" name="street_name" value="{{ empty(old('street_name')) ? $user->street_name : old('street_name') }}" placeholder="Janlaan">
                @error('street_name')
                    <p class="error">{{ $errors->first('street_name') }}</p>
                @enderror
            </div>
            <div class="input-div">
                <label for="house_number">Huisnummer</label><br>
                <input id="house_number" type="text" name="house_number" value="{{ empty(old('house_number')) ? $user->house_number : old('house_number') }}" placeholder="14">
                @error('house_number')
                    <p class="error">{{ $errors->first('house_number') }}</p>
                @enderror
            </div>
            <div class="input-div">
                <label for="postal_code">Postcode</label><br>
                <input id="postal_code" type="text" pattern="[0-9]{4}[A-z]{2}" name="postal_code" value="{{ empty(old('postal_code')) ? $user->postal_code : old('postal_code') }}" placeholder="1482AC">
                @error('postal_code')
                    <p class="error">{{ $errors->first('postal_code') }}</p>
                @enderror
            </div>
            <div class="input-div">
                <label for="admin">Admin</label><br>
                <select id="admin" name="admin">
                    <option value="false">Niet</option>
                    @if($user->isAdmin || old('admin') === "true")
                        <option value="true" selected>Wel</option>
                    @else
                        <option value="true">Wel</option>
                    @endif
                </select>
                @error('admin')
                    <p class="error">{{ $errors->first('admin') }}</p>
                @enderror
            </div>
            <input type="submit" value="Gebruiker aanpassen">
        </form>
    </main>
@endsection


<?php
    function checkValue($form, $name, $user) {
        if($form === "edit"){
            if(empty(old($name))){
                return $user[$name];
            }
        }
        return old($name);
    }
    ?>

