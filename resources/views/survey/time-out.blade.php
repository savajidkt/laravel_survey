@extends('layouts.app')
@section('content')
<section class="section small-c">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 general-card">
                <div class="card">
                    <img src="{{asset('front/assets/img/card.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title m-t-top80">Sorry, Time Out</h5>
                        <p class="card-text">Sorry, Your time is finished,please contact to admin.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
