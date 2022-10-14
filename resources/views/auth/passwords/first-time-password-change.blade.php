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
                                    <div class="p-4">
                                       <form class="row g-3 needs-validation p-3" method="POST" action="{{ route('first.password.change') }}">
                                            @csrf
                                          <h1 class="card-title pt-0 pb-0 mb-0">{{ __('Password Change') }}</h1>
                                          <div class="col-12">
                                          <input id="old-password" type="password" class="form-control @error('old-password') is-invalid @enderror" name="old-password" required autocomplete="new-password" placeholder="Old Password">
                                            @error('password')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                          <div class="col-12">
                                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New Password">
                                            @error('password')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                          <div class="col-12">
                                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                          </div>
                                          <div class="col-12">
                                             <button class="btn btn-primary w-100" type="submit">{{ __('Reset Password') }}</button>
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
