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
                        <h5 class="card-title m-t-top80">Lorem ipsum dolor sit amet</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, ad probo bonorum accusam mea,
                            erat tantas te sea. Oblique veritus volutpat vix no, cum tale
                            eruditi no. Ea usu rebum fuisset omnesque, est cu dolores efficiantur.</p>
                        <p class="card-text"><a href="{{ route('take-survey') }}" class="btn btn-primary">CLICK HERE TO START</a></p>

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