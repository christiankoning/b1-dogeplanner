@extends('layout.admin')

@section('content')
    <section class="walkCreateUpdateSection d-flex align-items-center py-5" id="plans">
        <div class="container text-light" >
            <div class="text-center pb-4">
                <h2 class="py-2">Wandeling Aanpassen</h2>
            </div>
            <div class="pull-right pb-4">
                <a class="btn btn-primary" href="{{ route('walks.index') }}"> Terug</a>
            </div>

            <form action="{{ route('walks.update', $walk->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Datum:</strong> @error('date') <span class="text-danger">De datum moet worden ingevuld & datum mag niet in het verleden zijn.</span> @enderror
                            <input type="text" name="date" id="datepicker" value="{{old('date') ? old('date') : \Carbon\Carbon::parse($walk->date)->format('d-m-Y')}}" class="form-control @error('date') is-invalid @enderror" placeholder="dd/mm/yyyy">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Starttijd:</strong> @error('start_time') <span class="text-danger">Tijd moet kloppen</span> @enderror
                            <input type="time" name="start_time"
                                   class="form-control @error('start_time') is-invalid @enderror" value="{{old('start_time') ? old('start_time') : $walk->start_time}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Eindtijd:</strong> @error('end_time') <span class="text-danger">Tijd moet kloppen & mag niet voor de starttijd zijn</span> @enderror
                            <input type="time" name="end_time"
                                   class="form-control @error('end_time') is-invalid @enderror" value="{{old('end_time') ? old('end_time') : $walk->end_time}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Hoeveelheid honden:</strong> @error('amount_dogs') <span class="text-danger">Het aantal honden moet worden ingevuld</span> @enderror
                            <input type="number" min="1" name="amount_dogs" value="{{ old('amount_dogs') ? old('amount_dogs') : $walk->amount_dogs}}" class="form-control @error('amount_dogs') is-invalid @enderror" placeholder="hoeveelheid honden:">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Locatie:</strong> @error('location') <span class="text-danger">De locatie moet worden ingevuld.</span> @enderror
                            <input type="text" name="location" value="{{ old('location') ? old('location') : $walk->location }}" class="form-control @error('location') is-invalid @enderror" placeholder="locatie">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center py-4">
                        <button type="submit" class="btn btn-primary">Aanpassen</button>
                    </div>
                </div>
            </form>
        </div>
        </section>
@endsection
