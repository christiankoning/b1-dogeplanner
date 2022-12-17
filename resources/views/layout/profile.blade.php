@extends('layout.user')

@section('content')
    <section class="services d-flex align-items-center py-5">
        <div class="container rounded mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="150px" src="{{asset('assets/images/dogpaw.png')}}">
                        <span class="font-weight-bold text-light">{{auth()->user()->name}}</span>
                        <span class="text-light">{{auth()->user()->email}}</span>
                        <span> </span>
                    </div>
                </div>

                <div class="col-md-5 border-right">
                    <form action="{{ route('profile.update', auth()->user()->id) }}" id="popup" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right text-light">Profiel Instellingen</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="labels text-light">Naam</label>
                                    <input type="text" name="name" class="form-control" placeholder="Naam"
                                           value="{{auth()->user()->name}}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="form-group mb-3">
                                    <span class="text-light"><strong>Email</strong></span>
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                           name="email" required autofocus value="{{auth()->user()->email}}">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <span class="text-light"><strong>Mobielnummer</strong></span>
                                    <input type="tel" placeholder="06-12345678" pattern="[0-9]{2}-[0-9]{8}"
                                           id="telephone" class="form-control"
                                           name="telephone" required value="{{auth()->user()->telephone}}">
                                    @if ($errors->has('telephone'))
                                        <span class="text-danger">{{ $errors->first('telephone') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <span class="text-light"><strong>Adres</strong></span>
                                    <div class="input-group">
                                        <input type="text" placeholder="Straatnaam" id="street_name"
                                               class="form-control"
                                               name="street_name" required value="{{auth()->user()->street_name}}">
                                        <input type="text" placeholder="Huisnmr." id="house_number" class="form-control"
                                               name="house_number" required value="{{auth()->user()->house_number}}"><br />
                                    </div>
                                    @if ($errors->has('street_name'))
                                        <span class="text-danger">{{ $errors->first('street_name') }}</span><br />
                                    @endif
                                    @if ($errors->has('house_number'))
                                        <span class="text-danger">{{ $errors->first('house_number') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <span class="text-light"><strong>Postcode</strong></span>
                                    <input type="text" placeholder="1234AB" pattern="[0-9]{4}[A-z]{2}" id="postal_code"
                                           class="form-control"
                                           name="postal_code" required value="{{auth()->user()->postal_code}}">
                                    @if ($errors->has('postal_code'))
                                        <span class="text-danger">{{ $errors->first('postal_code') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <span class="text-light"><strong>Wachtwoord</strong></span>
                                    <input type="password" placeholder="Wachtwoord" id="password" class="form-control"
                                           name="password" required value="">
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="mt-5 text-center">
                                <input type="button" class="btn profile-button" data-bs-toggle="modal"
                                       data-bs-target="#modalEditForm" value="Profiel Opslaan">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-4 border-right">
                    <br><br>
                    <span class="fs-2 text-light">Mijn honden:</span>
                    <a href="{{route('dog.create')}}"><i class="profileAddDog fs-5 fas fa-plus"></i></a>
                    @foreach($dogs as $dog)
                        <div class="profileCard mb-3 rounded-pill" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{asset('storage/image/' . $dog->img)}}" class="img-fluid rounded-circle"
                                         alt="...">
                                </div>
                                <div class="col-md-5">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>{{$dog->name}}</strong></h5>
                                        <p class="card-text"><strong>Ras:</strong> {{$dog->race}}</p>
                                        <p class="card-text"><strong>Leeftijd:</strong> {{$dog->age}} jaar</p>
                                        <p class="card-text"><strong>Gewicht:</strong> {{$dog->weight}} kg</p>
                                        <a href="{{ route('dog.show', $dog->id) }}"><strong>Meer Info</strong></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <br>
                                    <form action="{{ route('dog.destroy',$dog->id) }}" class="profileDogForm mx-auto" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('dog.edit', $dog->id) }}"><i class="profileEditDog fs-4 fas fa-edit"></i></a>
                                        <button class="profileDeleteDogButton" type="submit"><i class="fs-4 far fa-trash-alt"></i></button>
                                    </form>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Modal edit category -->
    <div class="modal fade" id="modalEditForm" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content modalCrudPopup text-light" style="background-color: #1C262F">
                <div class="modal-header">
                    <h5 class="modal-title">Gegevens opslaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Weet u zeker dat u uw gevenens wilt opslaan?
                    <div class="modal-footer d-block">
                        <button type="submit" class="btn float-end" onclick="SubmitFormFunction()">Gegevens opslaan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal edit category  -->
@endsection
