@extends('layouts.app')
@section('content')
<main class="login-bg">
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 d-flex flex-column align-items-center justify-content-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="p-5">
                                            <form class="row g-3 needs-validation p-3" method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <h1 class="card-title pt-0 pb-0 mb-0">Survey Login</h1>
                                                @if ($errors->any())
                                                    @foreach ($errors->all() as $error)
                                                        <div class="alert alert-danger" role="alert">
                                                                {{ $error }}
                                                        </div>
                                                    @endforeach
                                                @endif
                                                @if(session('statusError'))
                                                    <div class="alert alert-danger" role="alert">
                                                    {{ session('statusError') }}
                                                        </div>
                                                @endif
                                                <div class="col-12">
                                                    <div class="input-group has-validation">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                                    </div>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col-12">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                <label class="form-check-label" for="remember">
                                                                    Remember me
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            @if (Route::has('password.request'))
                                                            <p class="small small text-lg-end text-sm-center"><a class="btn btn-link" href="{{ route('password.request') }}">
                                                                    {{ __('Forgot Your Password?') }}
                                                                </a></p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary w-100" type="submit">Login</button>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-flex justify-content-center pt-3">
                                                        <a href="#" class="logo d-flex align-items-center w-auto">
                                                            <img src="{{asset('front/assets/img/logo.png')}}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6 login-form-img"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

@endsection