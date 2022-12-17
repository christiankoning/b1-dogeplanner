@extends('layout.user')
@section('content')
    <section class="dogCreateUpdateSection d-flex align-items-center py-5" id="plans">
        <div class="container text-light">
            <div class="text-center pb-4">
                <h2 class="py-2">Hond aanpassen</h2>
            </div>
            <div class="pull-right pb-4">
                <a class="btn btn-primary" href="{{ route('profile.index') }}"> Terug</a>
            </div>
            <div class="col-lg-4 mx-auto" data-aos="zoom-in">
                <div class="testimonial-card bg-transparent px-4">
                    <form action="{{ route('dog.update', $dog->id) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Naam:</strong> @error('name') <span class="text-danger">Naam moet worden ingevuld</span> @enderror
                                    <input type="text" name="name" id="name"
                                           class="form-control @error('name') is-invalid @enderror"
                                           value="{{ $dog->name}}"
                                           placeholder="Max">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Ras:</strong> @error('race') <span class="text-danger">Hondenras moet worden ingevuld</span> @enderror
                                    <input type="text" name="race" id="race"
                                           class="form-control @error('race') is-invalid @enderror"
                                           value="{{ $dog->race}}"
                                           placeholder="Duitse herder">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Leeftijd(in jaren):</strong> @error('age') <span class="text-danger">Leeftijd moet worden ingevuld</span> @enderror
                                    <input type="number" min="0" name="age" id="age"
                                           class="form-control @error('age') is-invalid @enderror"
                                           value="{{ $dog->age}}"
                                           placeholder="1">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Gewicht(in Kg):</strong> @error('weight') <span class="text-danger">Gewicht moet worden ingevuld</span> @enderror
                                    <input type="number" min="0" name="weight" id="weight"
                                           class="form-control @error('weight') is-invalid @enderror"
                                           value="{{ $dog->weight}}"
                                           placeholder="10">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Bio:</strong>
                                    <input type="text" name="notes" id="notes" class="form-control" value="{{ $dog->notes}}" placeholder="Korte omschrijving van je hond">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Afbeelding:</strong>@error('img') <span class="text-danger">Afbeelding mag niet groter dan 200kb.</span> @enderror
                                    <input type="file" name="img" id="img" class="image form-control">
                                </div>
                            </div>
                            <input type="hidden" id="imgbase64" name="filename"/>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center py-4">
                                <button type="submit" class="btn btn-primary">Bijwerken</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
