@extends('layouts.app')
@section('page_title', 'Survey Home')
@section('content')
<section class="section small-c">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 general-card">

                <div class="card">
                    <img src="{{asset('front/assets/img/card.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title m-t-top80">An interactive assessment tool Built Different</h5>
                        <p class="card-text">When this survey begins you will be given a 40 minute timer to complete this assessment. The timer on the survey will continue if you navigate away from this page so please make sure to complete this survey in one sitting. This Survey will consist of Scenarios with responses or actions you would be most likely, vs. least likely to do. You will be unable to return to previous questions.</p>
                        <p class="card-text"><a href="{{ route('take-survey') }}" class="btn btn-primary">The Bandelli & associates relational intelligence Survey</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('page-script')
<script type="text/javascript">
    $( document ).ready( function() {
    });
</script>
@endsection