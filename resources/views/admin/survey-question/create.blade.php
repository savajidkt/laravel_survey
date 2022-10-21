@extends('admin.layout.app')
@section('page_title','New Question')
@section('content')
<section class="bs-validation">
    <div class="row">
        <!-- Bootstrap Validation -->
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">New Question</h4>
                </div>
                <div class="card-body">
                    <form id="jquery-val-form" class="needs-validation1" novalidate method="post" enctype="multipart/form-data" action="{{route('question.store')}}">
                        <input type="hidden" name="id" value="{{$model->id}}">
                        @csrf
                        @include('admin.survey-question.form')
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" id="user-save" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@include('admin.survey-question.options-list')
@endsection