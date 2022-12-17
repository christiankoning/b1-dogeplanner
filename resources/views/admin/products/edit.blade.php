@extends('layout.admin')

@section('content')
    <section class="walkCreateUpdateSection d-flex align-items-center py-5" id="plans">
        <div class="container text-light">
            <div class="text-center pb-4">
                <h2 class="py-2">Producten updaten</h2>
            </div>
            <div class="pull-right pb-4">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Terug</a>
            </div>

            <form action="{{ route('products.update',$product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Naam:</strong> @error('name') <span class="text-danger">De naam van het product moet ingevuld worden</span> @enderror
                        <input type="text" name="name" min="4" max="64"
                               class="form-control @error('name') is-invalid @enderror" value="{{$product->name}}"
                               placeholder="product naam">
                    </div>
                    <div class="form-group">
                        <strong>Omschrijving:</strong>
                        <input type="text" name="description"
                               class="form-control" value="{{$product->description}}"
                               placeholder="Voeg hier de omschrijving van je product">
                    </div>
                    <div class="form-group">
                        <strong>Prijs in euro's:</strong> @error('price') <span class="text-danger">De prijs van het product moet ingevuld worden en moet meer dan één euro kosten</span> @enderror
                        <input type="number" min="1" step="0.01" name="price"
                               class="form-control @error('price') is-invalid @enderror" value="{{number_format((float)$product->price,2,',','.')}}"
                               placeholder="50">
                    </div>
                    <div class="form-group">
                        <strong>Korting in percentage:</strong> @error('discount') <span class="text-danger">De korting van het product moet ingevuld worden en mag niet negatief zijn</span> @enderror
                        <input type="number" min="0" name="discount"
                               class="form-control @error('discount') is-invalid @enderror"
                               value="{{$product->discount}}"
                               placeholder="10">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center py-4">
                    <button type="submit" class="btn btn-primary">Aanpassen</button>
                </div>
            </form>
        </div>
    </section>

@endsection
