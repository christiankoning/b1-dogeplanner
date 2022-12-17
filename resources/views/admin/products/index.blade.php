@extends('layout.admin')

@section('content')
    <section class="services d-flex align-items-center py-5" id="plans">
        <div class="container-fluid text-light">
            <div class="row gy-12" data-aos="zoom-in">
                <div class="text-center pb-4">
                    <h2>Producten beheer</h2>
                    <p>Deze pagina is voor het toevoegen, verwijderen, updaten en weergeven van
                        bestaande producten binnen de database.
                    </p>
                </div>
                <div class="pull-right pb-4">
                    <a class="btn btn-succes" href="{{route('products.create')}}">Product aanmaken</a>
                </div>
                <div class="row gy-12" data-aos="zoom-in">
                    @foreach($products as $product)
                        <div class="col-lg-4">
                            <div class="card bg-transparent px-4">
                                <p class="py-2"><strong>#</strong>{{$product->id}}</p>
                                <p class="py-2"><strong>Naam: </strong>{{$product->name}}</p>
                                <p class="py-2"><strong>Prijs: </strong>€{{number_format((float)$product->price,2,',','.')}}</p>
                                <p class="py-2"><strong>Korting: </strong>{{$product->discount}}%</p>
                                <p class="py-2"><strong>Omschrijving: </strong>{{ $product->description, }}</p>
                                <p class="py-2">{{$product->updated_at}}</p>
                                <form class="py-2" method="POST" action="{{ route('products.destroy', $product->id) }}">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <a href="{{route('products.edit', $product->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                    <input type="submit" class="btn btn-danger btn-sm" value="Delete"/>
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
