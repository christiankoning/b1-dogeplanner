@extends('layout/user')
@section('content')
    <section class="walkShowSection d-flex align-items-center py-5" id="plans">
        <div class="container text-light">
            <div class="text-center pb-4">
                <h2 class="py-2">Bestel pagina</h2>
            </div>
            <div class="pull-right pb-4">
                <a class="btn btn-primary" href="{{ route('orders.index') }}">Terug</a>
            </div>
            <form action="{{ route('orders.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-4">
                        <div class="col-sm-4">
                            <p class="py-2"><strong>{{$product->name}}</strong></p>
                            <input type="hidden" value="{{$product->name}}" name="Name" class="Name"/>
                            <p class="py-2">{{ $product->description }}</p>
                            <input type="hidden" value="{{ $product->description }}" name="Description" class="Description"/>
                        </div>
                        <div class="col-sm-4">
                            @if($product->discount > 0)
                                <p class="py-2"><strong>Korting: </strong> {{ $product->discount }}%</p>
                                <p class="py-2"><strong>Price: </strong>
                                    <del>€ {{number_format((float)$product->price,2,',','.')}}</del>
                                    <strong>€ {{number_format((float)$product->price - ($product->price * ($product->discount / 100)),2,',','.')}}</strong>
                                    <input type="hidden" value="{{number_format((float)$product->price - ($product->price * ($product->discount / 100)),2,',','.')}}" name="Price" class="Price" />
                                </p>
                            @else
                                <p class="py-2"><strong>Price: </strong>€ {{number_format((float)$product->price,2,',','.')}}</p>
                                <input type="hidden" value="{{number_format((float)$product->price,2,',','.')}}" name="Price" class="Price" />
                            @endif
                        </div>
                    </div>
                </div>
{{--                <div class="row">--}}
{{--                    <h3>Selecteer hier uw betaalmethode/bank</h3>--}}
{{--                    <input type="radio" id="iDeal" name="methode" value="iDeal">--}}
{{--                    <label for="iDeal">iDeal</label>--}}
{{--                    <input list="banks">--}}
{{--                    <datalist id="banks">--}}
{{--                        <option value="Rabobank">--}}
{{--                        <option value="ABN AMRO">--}}
{{--                        <option value="ING">--}}
{{--                        <option value="SNS">--}}
{{--                        <option value="ASN Bank">--}}
{{--                    </datalist>--}}

{{--                    </datalist>--}}
{{--                </div>--}}
                <input type="submit" class="btn btn-success" value="betalen">
            </form>
        </div>
    </section>
