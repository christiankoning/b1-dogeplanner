@extends('layout/user')

@section('content')
    <section class="services d-flex align-items-center py-5" id="plans">
        <div class="container-fluid text-light">
            <div class="row gy-12" data-aos="zoom-in">
                <div class="text-center pb-4">
                    <h2>Diensten en Strippenkaarten</h2>
                    <p>Op deze pagina bieden wij een assortiment aan opties voor het uitlaten van uw hond.
                        Hierbij kunt u kiezen om eenmalig uw hond uit te laten of
                        een strippenkaart te nemen als u in de toekomst
                        van plan bent meerdere malen onze dienst te gaan gebruiken!
                    </p>
                </div>
            </div>
            <div class="row gy-12" data-aos="zoom-in">
                @foreach($products as $product)
                    <div class="col-lg-4">
                        <div class="card bg-transparent px-4">
                            <p class="py-2"><strong>{{$product->name}}</strong></p>
                            <p class="py-2">{{ $product->description }}</p>
                            @if($product->discount > 0)
                                <p class="py-2"><strong>Korting: </strong> {{ $product->discount }}%</p>
                                <p class="py-2"><strong>Price: </strong>
                                    <del>€ {{number_format((float)$product->price,2,',','.')}}</del>
                                    <strong>€ {{number_format((float)$product->new_price,2,',','.')}}</strong>
                                </p>
                            @else
                                <p class="py-2"><strong>Price: </strong>€ {{number_format((float)$product->price,2,',','.')}}</p>
                            @endif
                            <div class="py-2">
                                <a href="{{route('orders.create', $product->id)}}" class="btn btn-primary btn-bestellen">Bestel</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of plans -->
@endsection
