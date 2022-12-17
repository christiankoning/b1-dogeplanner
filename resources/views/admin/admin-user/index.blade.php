@extends('layout.admin')

@section('css')
    <link href="{{asset('css/admin-user.css')}}" rel="stylesheet">
@endsection

@section('content')
    <main>
        <section class="services d-flex align-items-center py-5">
            <div class="container text-light" >
                <div class="text-center pb-4 title-div">
                    <h2 class="py-2">Admin Gebruiker beheren page</h2>
                </div>
                <div class="pull-right pb-4">
                    <a class="btn btn-succes" href="{{route('user.create')}}">Gebruiker aanmaken</a>
                </div>
                <div class="row gy-4" data-aos="zoom-in">
                    @foreach($users as $index => $userData)
                        <div class="col-lg-4">
                            <div class="card bg-transparent px-4">
                                <h3>{{$userData->name}}</h3>
                                <p class="py-3">
                                    Id: {{$userData->id}}<br>
                                    Admin: {{$userData->isAdmin ? "Ja" : "Nee"}}<br>
                                @foreach($dogs as $dog)
                                        @if($userData->id == $dog->id_user)
                                            Hond: {{$dog->name}}<br>
                                        @endif
                                    @endforeach
                                </p>
                                <strong>Acties: </strong>
                                <form action="{{ route('user.destroy',$userData->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-info btn-walk" href="{{route('user.show',$userData->id)}}">Bekijken</a>
                                    <a class="btn btn-primary btn-walk" href="{{route('user.edit',$userData->id)}}">Aanpassen</a>
                                    <button type="submit" class="btn btn-danger btn-walk">Verwijderen</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> <!-- end of container -->
        </section>
    </main>
@endsection


