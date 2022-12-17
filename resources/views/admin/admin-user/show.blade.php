@extends('layout.admin')

@section('css')
    <link href="{{asset('css/admin-user.css')}}" rel="stylesheet">
@endsection

@section('content')
    <section class="userShowSection d-flex align-items-center py-5" id="plans">
        <div class="container text-light">
            <div class="text-center pb-4">
                <h2 class="py-2">{{ $user->name }}</h2>
            </div>
            <div class="pull-right pb-4">
                <a class="btn btn-primary" href="{{ route('user.index') }}"> Terug</a>
            </div>
            <div class="row gy-4 col-lg-4 mx-auto" data-aos="zoom-in">
                <div class="testimonial-card bg-transparent px-4">
                    <div class="row gy-0">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Admin:</strong>
                                {{ $user->isAdmin ? "Ja" : "Nee" }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Email:</strong>
                                {{ $user->email}}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Telefoon:</strong>
                                {{ $user->telephone}}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Straatnaam:</strong>
                                {{ $user->street_name}}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Huisnummer:</strong>
                                {{ $user->house_number}}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Postcode:</strong>
                                {{ $user->postal_code}}
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($dogs as $dog)
                        <div class="testimonial-card bg-transparent px-4">
                            <div class="row gy-4">
                                <div class="col-xs-7 col-sm-7 col-md-7">
                                    <div class="form-group">
                                        <strong>Naam:</strong>
                                        {{ $dog->name }}
                                    </div>
                                    <div class="form-group">
                                        <strong>Ras:</strong>
                                        {{ $dog->race }}
                                    </div>
                                    <div class="form-group">
                                        <strong>Leeftijd:</strong>
                                        {{ $dog->age }} jaar
                                    </div>
                                    <div class="form-group">
                                        <strong>Gewicht:</strong>
                                        {{ $dog->weight }} kg
                                    </div>
                                    <div class="form-group description">
                                        <strong>Bio:</strong>
                                        {{ $dog->notes }}
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <img src="{{asset('storage/image/'. $dog->img)}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection


