@extends('layout.admin')

@section('content')
    <section class="walkIndexSection d-flex align-items-center py-5" id="plans">
        <div class="container text-light">
            <div class="text-center pb-4">
                <h2 class="py-2">Wandelingen overzicht</h2>
            </div>
            <div class="pull-right pb-4">
                <a class="btn btn-succes" href="{{route('walks.create')}}">Wandeling aanmaken</a>
            </div>
            <div class="row gy-4" data-aos="zoom-in">
                @if(count($pendingWalks) > 0)
                    <h2>In afwachting</h2>
                    @foreach ($pendingWalks as $key => $value)
                        <div class="col-lg-4">
                            <div class="card bg-transparent px-4">
                                <p class="py-2"><strong>No: </strong>{{$value->id}}</p>
                                <p class="py-2">
                                    <strong>Datum: </strong>{{ \Carbon\Carbon::parse($value->date)->format('d-m-Y') }}
                                </p>
                                <p class="py-2"><strong>Hoeveelheid honden: </strong> {{ $value->amount_dogs }}</p>
                                <p class="py-2"><strong>Locatie: </strong>{{ $value->location }}</p>
                                <p class="py-2"><strong>Starttijd
                                        op: </strong>{{ Carbon\Carbon::parse($value->start_time)->format('H:i') }}
                                </p>
                                <p class="py-2"><strong>Eindtijd
                                        op: </strong>{{ Carbon\Carbon::parse($value->end_time)->format('H:i') }}
                                </p>
                                <p class="py-2"><strong>Aangemaakt
                                        op: </strong>{{ \Carbon\Carbon::parse($value->created_at)->format('d-m-Y H:i')}}</p>
                                <p class="py-2"><strong>Aangepast
                                        op: </strong>{{ \Carbon\Carbon::parse($value->updated_at)->format('d-m-Y H:i') }}
                                </p>
                                <div class="py-2">
                                    <strong>Acties: </strong>
                                    <div>
                                        <form>
                                            <a class="btn btn-info btn-walk" href="{{ route('walks.show',$value->id) }}">Bekijken</a>
                                            <a class="btn btn-info btn-walk" href="{{ route('walk.accept',$value->id) }}">Accepteren</a>
                                            <a class="btn btn-info btn-walk" href="{{ route('walk.denied',$value->id) }}">Weigeren</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                @if(count($acceptedWalks) > 0)
                    <h2>Geaccepteerd</h2>
                    @foreach ($acceptedWalks as $key => $value)
                        <div class="col-lg-4">
                            <div class="card bg-transparent px-4">
                                <p class="py-2"><strong>No: </strong>{{$value->id}}</p>
                                <p class="py-2">
                                    <strong>Datum: </strong>{{ \Carbon\Carbon::parse($value->date)->format('d-m-Y') }}
                                </p>
                                <p class="py-2"><strong>Hoeveelheid honden: </strong> {{ $value->amount_dogs }}</p>
                                <p class="py-2"><strong>Locatie: </strong>{{ $value->location }}</p>
                                <p class="py-2"><strong>Starttijd
                                        op: </strong>{{ Carbon\Carbon::parse($value->start_time)->format('H:i') }}
                                </p>
                                <p class="py-2"><strong>Eindtijd
                                        op: </strong>{{ Carbon\Carbon::parse($value->end_time)->format('H:i') }}
                                </p>
                                <p class="py-2"><strong>Aangemaakt
                                        op: </strong>{{ \Carbon\Carbon::parse($value->created_at)->format('d-m-Y H:i')}}</p>
                                <p class="py-2"><strong>Aangepast
                                        op: </strong>{{ \Carbon\Carbon::parse($value->updated_at)->format('d-m-Y H:i') }}
                                </p>
                                <div class="py-2">
                                    <strong>Acties: </strong>
                                    <form>
                                        <a class="btn btn-info btn-walk" href="{{ route('walks.show',$value->id) }}">Bekijken</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of plans -->
@endsection

