@extends('layout.admin')

@section('content')
    <section class="walkShowSection d-flex align-items-center py-5" id="plans">
        <div class="container text-light">
            <div class="text-center pb-4">
                <h2 class="py-2">Wandeling weergeven</h2>
            </div>
            <div class="pull-right pb-4">
                <a class="btn btn-succes" href="{{route('walks.index')}}">Terug</a>
            </div>
            <div class="row gy-4 justify-content-center" data-aos="zoom-in">
                <div class="col-lg-4">
                    <div class="card bg-transparent px-4">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Datum:</strong>
                                {{ \Carbon\Carbon::parse($walk->date)->format('d-m-Y h:i') }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Starttijd:</strong>
                                {{ \Carbon\Carbon::parse($walk->start_time)->format('h:i') }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Eindtijd:</strong>
                                {{ \Carbon\Carbon::parse($walk->end_time)->format('h:i') }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Hoeveelheid honden:</strong>
                                {{ $walk->amount_dogs }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Locatie:</strong>
                                {{ $walk->location }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Aangemaakt op:</strong>
                                {{ \Carbon\Carbon::parse($walk->created_at)->format('d-m-Y h:i') }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Aangepast op:</strong>
                                {{ \Carbon\Carbon::parse($walk->updated_at)->format('d-m-Y h:i') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of plans -->
@endsection
