@extends('layouts.app')
@section('content')
<section class="section small-c">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 general-card">
                <div class="card">
                    <img src="{{asset('front/assets/img/card.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title m-t-top80">Thank You</h5>
                        <p class="card-text">You have successfully completed your survey.</p>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
