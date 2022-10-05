@extends('admin.layout.app')
@section('content')
<section class="bs-validation">
    <div class="row">
        <!-- Bootstrap Validation -->
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{isset($model->id) && $model->id != ''?'Update':'Add'}} User</h4>
                </div>
                <div class="card-body">
                    {{ Form::open(['route' => 'users.store', 'class' => 'needs-validation1', 'role' => 'form', 'method' => 'post', 'id' => 'jquery-val-form','enctype'=>'multipart/form-data']) }}
                        {{ csrf_field() }}
                        {{ Form::hidden('id', $model->id != ''?$model->id:'', ['id' => 'id']) }}
                        @include('admin.user.form')
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" id="user-save" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection