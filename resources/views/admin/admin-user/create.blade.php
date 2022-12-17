@extends('layout.admin')

@section('css')
    <link href="{{asset('css/admin-user.css')}}" rel="stylesheet">
@endsection

@section('content')
    <main>
        <div class="title-div">
            <h2>Gebruiker aanmaken</h2>
            <a href="{{route('user.index')}}">Terug</a>
        </div>

        <form class="model" method="post" action="{{route('user.store')}}">
            @csrf
            <div class="input-div">
                <label for="name">Naam</label><br>
                <input id="name" type="text" name="name" value="{{ old("name") }}" placeholder="Jan Jansen">
                @error('name')
                    <p class="error">{{ $errors->first('name') }}</p>
                @enderror
            </div>
            <div class="input-div">
                <label for="email">Email</label><br>
                <input id="email" type="text" name="email" value="{{ old("email") }}" placeholder="jan.jan@gmail.com">
                @error('email')
                    <p class="error">{{ $errors->first('email') }}</p>
                @enderror
            </div>
            <div class="input-div">
                <label for="telephone">Telefoon</label><br>
                <input id="telephone" type="tel" pattern="[0-9]{2}-[0-9]{8}" name="telephone" value="{{ old("telephone") }}" placeholder="06-12345678">
                @error('telephone')
                    <p class="error">{{ $errors->first('telephone') }}</p>
                @enderror
            </div>
            <div class="input-div">
                <label for="street_name">Straatnaam</label><br>
                <input id="street_name" type="text" name="street_name" value="{{ old("street_name") }}" placeholder="Janlaan">
                @error('street_name')
                    <p class="error">{{ $errors->first('street_name') }}</p>
                @enderror
            </div>
            <div class="input-div">
                <label for="house_number">Huisnummer</label><br>
                <input id="house_number" type="text" name="house_number" value="{{ old("house_number") }}" placeholder="14">
                @error('house_number')
                    <p class="error">{{ $errors->first('house_number') }}</p>
                @enderror
            </div>
            <div class="input-div">
                <label for="postal_code">Postcode</label><br>
                <input id="postal_code" type="text" pattern="[0-9]{4}[A-z]{2}" name="postal_code" value="{{ old("postal_code") }}" placeholder="1482AC">
                @error('postal_code')
                    <p class="error">{{ $errors->first('postal_code') }}</p>
                @enderror
            </div>
            <div class="input-div">
                <label for="admin">Admin</label><br>
                <select id="admin" name="admin">
                    <option value="false">Niet</option>
                    @if(old('admin') === "true")
                        <option value="true" selected>Wel</option>
                    @else
                        <option value="true">Wel</option>
                    @endif
                </select>
                @error('admin')
                    <p class="error">{{ $errors->first('admin') }}</p>
                @enderror
            </div>
            <div class="input-div">
                <label for="newPassword">Wachtwoord</label><br>
                <input id="newPassword" type="password" name="newPassword" value="{{ old("newPassword") }}">
                @error('newPassword')
                    <p class="error">{{ $errors->first('newPassword') }}</p>
                @enderror
            </div>
            <div class="input-div">
                <label for="passwordRepeat">Herhaal wachtwoord</label><br>
                <input id="passwordRepeat" type="password" name="passwordRepeat" value="{{ old("passwordRepeat") }}">
            </div>
            <input type="submit" value="Gebruiker aanmaken">
        </form>
    </main>
@endsection

