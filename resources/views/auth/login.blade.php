@extends('layout.user')

@section('content')
    <!-- About -->
    <section class="loginSection d-flex align-items-center text-light py-5" id="plans">
        <div class="container text-light" >
            <div class="text-center pb-4">
                <h2 class="py-2">Inloggen</h2>
            </div>
            @if(session('invalid'))
                <br>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    <div>
                        {!! \Session('invalid')!!}
                    </div>
                </div>
            @endif
            <div class="row justify-content-center" data-aos="zoom-in">
                    <div class="col-lg-4">
                        <div class="testimonial-card bg-transparent px-4">
                            <form method="POST" action="{{ route('login.custom') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <span><strong>Email:</strong></span>
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <span><strong>Wachtwoord:</strong></span>
                                    <input type="password" placeholder="Wachtwoord" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Herinner mij
                                        </label>
                                    </div>
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Log in</button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of about -->
@endsection
