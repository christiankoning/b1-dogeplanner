@extends('layout.admin')

@section('content')
    <section class="walkCreateUpdateSection d-flex align-items-center py-5" id="plans">
        <div class="container text-light">
            <div class="text-center pb-4">
                <h2 class="py-2">Producten aanmaken</h2>
            </div>
            <div class="pull-right pb-4">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Terug</a>
            </div>

            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Naam:</strong> @error('name') <span class="text-danger">De naam van het product moet ingevuld worden en moet tussen de 4 en 64 letters zitten</span> @enderror
                        <input type="text" name="name" minlength="4" maxlength="64"
                               class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}"
                               placeholder="product naam">
                    </div>
                    <div class="form-group">
                        <strong>Omschrijving:</strong>
                        <input type="text" name="description"
                               class="form-control" value="{{old('description')}}"
                               placeholder="Voeg hier de discriptie van je product">
                    </div>
                    <div class="form-group">
                        <strong>Prijs in euro's:</strong> @error('price') <span class="text-danger">De prijs van het product moet ingevuld worden en moet meer dan één euro kosten</span> @enderror
                        <input type="number" step="0.01" min="1" name="price"
                               class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}"
                               placeholder="50">
                    </div>
                    <div class="form-group">
                        <strong>Korting in percentage:</strong> @error('discount') <span class="text-danger">De korting van het product moet ingevuld worden en mag niet negatief zijn</span> @enderror
                        <input type="number" min="0" name="discount"
                               class="form-control @error('discount') is-invalid @enderror" value="{{old('discount')}}"
                               placeholder="10">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center py-4">
                    <button type="submit" class="btn btn-primary">Aanmaken</button>
                </div>
            </form>
        </div>
    </section>

@endsection
