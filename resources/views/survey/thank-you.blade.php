@extends('layouts.app')
@section('page_title', 'Thank You')
@section('content')
<section class="section small-c">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 general-card">
                <div class="card">
                    <img src="{{asset('front/assets/img/card.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Thank you for completing the survey</h5>
                        <p class="card-text">Thank you for completing the assessment. One of our team members will reach out to you shortly to schedule your debrief.</p>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
