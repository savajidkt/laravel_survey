@extends('admin.layout.app')
@section('content')
<section class="bs-validation">
    <div class="row">
        <!-- Bootstrap Validation -->
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">New User</h4>
                </div>
                <div class="card-body">
                    <form class="needs-validation" novalidate method="post" enctype="multipart/form-data" action="{{route('admin.users.store')}}">
                        @include('admin.user.form')
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection