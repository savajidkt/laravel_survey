@extends('layouts.app')
@section('page_title', 'Demographic Questions')
@section('content')

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 demographic-card">
        <div class="card">
          <h4 class="card-header">Demographic Questions</h4>
          <div class="card-body">
            <form  class="demo-frm" novalidate method="post" enctype="multipart/form-data" action="{{route('demographic-save')}}">
            @csrf
              <div class="row">
                <div class="col-md-12">
                  <h5>What gender do you identify as?</h5>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" {{ old('gender')=='male'? 'checked' : '' }} id="exampleRadios1" value="male" required>
                    <label class="form-check-label" for="exampleRadios1">
                      Male (including transgender men)
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" {{ old('gender')=='female'? 'checked' : '' }} value="female" required>
                    <label class="form-check-label" for="exampleRadios2">
                      Female (including transgender women)
                    </label>
                  </div>
                  <div class="form-check form-check-inline t-com">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios3" {{ old('gender')=='other'? 'checked' : '' }} value="other" required>
                    <label class="form-check-label" for="exampleRadios3">
                      Other
                    </label>
                  </div>
                  
                </div>
                <div class="col-md-12 mt-3" id="other-opt" style="display:{{old('gender') == 'other' ? 'block' : 'none'}}" >
                  <div class="row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Prefer to self-describe as</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="other_text" id="other_text" value="{{old('other_text')}}">
                    </div>
                  </div>
                </div>
                @error('gender')
                  <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                  @enderror
              </div>
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <h5>What is your age?</h5>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="age" {{ old('age')=='20-29'? 'checked' : '' }}  value="20-29" required>
                    <label class="form-check-label" for="">
                      20 – 29 years old
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="age"  value="30-39" {{ old('age')=='30-39'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      30 – 39 years old
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="age" value="40-49" {{ old('age')=='40-49'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      40 – 49 years old
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="age"  value="50-59" {{ old('age')=='50-59'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      50 – 59 years old
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="age"  value="60-69" {{ old('age')=='60-69'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      60 – 69 years old
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="age"  value="above-69" {{ old('age')=='above-69'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      Above 69 years old
                    </label>
                  </div>
                </div>
                  @error('age')
                  <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                  @enderror
              </div>
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <h5>Please specify your ethnicity</h5>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ethnicity" id="" {{ old('ethnicity')=='Caucasian'? 'checked' : '' }} value="Caucasian" required>
                    <label class="form-check-label" for="">
                      Caucasian
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ethnicity" id="" value="African-American" {{ old('ethnicity')=='African-American'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      African-American
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ethnicity" id="" value="Latin or Hispanic" {{ old('ethnicity')=='Latin or Hispanic'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      Latin or Hispanic
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ethnicity" id="" value="Asian" {{ old('ethnicity')=='Asian'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      Asian
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ethnicity" id="" value="Native American" {{ old('ethnicity')=='Native American'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      Native American
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ethnicity" id="" value="Native Hawaiian or Pacific Islander" {{ old('ethnicity')=='Native Hawaiian or Pacific Islander'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      Native Hawaiian or Pacific Islander
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ethnicity" id="" value="Two or More" {{ old('ethnicity')=='Two or More'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      Two or More
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ethnicity" id="" value="Other/Unknown" {{ old('ethnicity')=='Other/Unknown'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      Other/Unknown
                    </label>
                  </div>
                </div>
                @error('ethnicity')
                  <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                  @enderror
              </div>
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <h5>Which option below best describes your job level?</h5>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="job_level" id="" value="Individual contributor" {{ old('ethnicity')=='Caucasian'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      Individual contributor
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="job_level" id="" value="Manager" {{ old('job_level')=='Manager'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      Manager
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="job_level" id="" value="Director" {{ old('job_level')=='Director'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      Director
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="job_level" id="" value="Vice president" {{ old('job_level')=='Vice president'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      Vice president
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="job_level" id="" value="Senior vice president" {{ old('job_level')=='Senior vice president'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      Senior vice president
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="job_level" id="" value="C-suite role" {{ old('job_level')=='C-suite role'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      C-suite role
                    </label>
                  </div>
                </div>
                @error('job_level')
                  <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                  @enderror
              </div>



              <hr>

              <div class="row">
                <div class="col-md-12">
                  <h5>How many years have you been in a role leading others?</h5>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="years" id="" value="less" {{ old('years')=='less'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      Less than a year
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="years" id="" value="1-5" {{ old('years')=='1-5'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      1-5 years
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="years" id="" value="6-10" {{ old('years')=='6-10'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      6-10 years
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="years" id="" value="10-15" {{ old('years')=='10-15'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      10-15 years
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="years" id="" value="15" {{ old('years')=='15'? 'checked' : '' }} required>
                    <label class="form-check-label" for="">
                      Over 15 years
                    </label>
                  </div>
                </div>
                @error('years')
                  <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                  @enderror
              </div>
              <div class="row mt-4">
                <div class="col-lg-12">
                  <button  class="btn btn-primary" id="demographic-btn">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>



@endsection

@section('page-script')
<script>
  $(function() {
    $('input[name=gender]').change(function() {
      var value = $('input[name=gender]:checked').val();

      if (value == 'other') {
        $('#other-opt').show(1000);
      } else {
        $('#other-opt').hide(1000);
      }

    });
  });

  $('#demographic-btn1').click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var survey_id = $('#survey_id').val();
        $.ajax({
           type:'POST',
           url:"{{route('demographic-save')}}",
           dataType:'json',
           data:{survey_id:survey_id},
           success:function(data){
                var status = data.status
                if( status == 'timeout' )
                {
                    window.location = moduleConfig.redirectUrl
                }
           }

        });
    });

  // $(document).ready(function() {
  //   $(".demo-frm").validate({
  //     rules: {
  //       gender: {
  //         required: true,
  //         minlength: 1
  //       },
  //       age: {
  //         required: true,
  //         minlength: 1
  //       },
  //       ethnicity: {
  //         required: true,
  //         minlength: 1
  //       },
  //       job_level: {
  //         required: true,
  //         minlength: 1
  //       },
  //       years: {
  //         required: true,
  //         minlength: 1
  //       }
  //     }
  //   });
  // });
</script>
@endsection