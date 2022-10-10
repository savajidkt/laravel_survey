@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 question-card">
                <div class="card">
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="pc-tagline">Progress: <strong>40% Complete</strong></div>
                    <div class="question-listing"></div>
                    <input type="hidden" name="page" id="page" value="0">
                    <div class="error-msg" style="color:red;"></div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <button type="button" class="btn btn-light" id="prevBtn" onclick="nextPrev(-1)"><i class="bi bi-arrow-left me-1"></i> Back</button>
                            <button type="button" class="btn btn-primary pull-right" id="nextBtn" onclick="nextPrev(1)">Next Question <i class="bi bi-arrow-right me-1"></i></button>
                        </div>
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
        
        first_time_load(configData);
    });
</script>
@endsection

