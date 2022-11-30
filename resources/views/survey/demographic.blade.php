@extends('layouts.app')
@section('page_title', 'Take Survey')
@section('content')

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 demographic-card">
        <div class="card">
			<h4 class="card-header">Demographic Questions</h4>
			<div class="card-body">
				<div class="row">
				<div class="col-md-12">
				<h5>What gender do you identify as?</h5>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male">
				  <label class="form-check-label" for="exampleRadios1">
					Male (including transgender men)
				  </label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
				  <label class="form-check-label" for="exampleRadios2">
					Female (including transgender women)
				  </label>
				</div>
				<div class="form-check form-check-inline t-com">
				  <input class="form-check-input" type="radio" name="gender" id="exampleRadios3" value="other">
				  <label class="form-check-label" for="exampleRadios3">
					Other
				  </label>
				</div>
				</div>
				<div class="col-md-12 mt-3" id="other-opt">
				<div class="row">
				<label for="staticEmail" class="col-sm-3 col-form-label">Prefer to self-describe as</label>
				<div class="col-sm-4">
				  <input type="text"  class="form-control" name="other_text" id="other_text" value="">
				</div>
				</div>
				</div>
				</div>
				<hr>
				<div class="row">
				<div class="col-md-12">
					<h5>What is your age?</h5>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="age" id="exampleRadios1" value="20-29">
					  <label class="form-check-label" for="exampleRadios1">
						20 – 29 years old
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="age" id="exampleRadios1" value="30-39">
					  <label class="form-check-label" for="exampleRadios1">
						30 – 39 years old
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="age" id="exampleRadios1" value="40-49">
					  <label class="form-check-label" for="exampleRadios1">
						40 – 49 years old
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="age" id="exampleRadios1" value="50-59">
					  <label class="form-check-label" for="exampleRadios1">
						50 – 59 years old
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="age" id="exampleRadios1" value="60-69">
					  <label class="form-check-label" for="exampleRadios1">
						60 – 69 years old
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="age" id="exampleRadios1" value="above-69">
					  <label class="form-check-label" for="exampleRadios1">
						Above 69 years old
					  </label>
					</div>
				</div>
				</div>
				<hr>
				<div class="row">
				<div class="col-md-12">
					<h5>Please specify your ethnicity</h5>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="ethnicity" id="exampleRadios1" value="Caucasian">
					  <label class="form-check-label" for="exampleRadios1">
						Caucasian
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="ethnicity" id="exampleRadios1" value="African-American">
					  <label class="form-check-label" for="exampleRadios1">
						African-American
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="ethnicity" id="exampleRadios1" value="Latin or Hispanic">
					  <label class="form-check-label" for="exampleRadios1">
						Latin or Hispanic
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="ethnicity" id="exampleRadios1" value="Asian">
					  <label class="form-check-label" for="exampleRadios1">
						Asian
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="ethnicity" id="exampleRadios1" value="Native American">
					  <label class="form-check-label" for="exampleRadios1">
						Native American
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="ethnicity" id="exampleRadios1" value="Native Hawaiian or Pacific Islander">
					  <label class="form-check-label" for="exampleRadios1">
						Native Hawaiian or Pacific Islander
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="ethnicity" id="exampleRadios1" value="Two or More">
					  <label class="form-check-label" for="exampleRadios1">
						Two or More
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="ethnicity" id="exampleRadios1" value="Other/Unknown">
					  <label class="form-check-label" for="exampleRadios1">
						Other/Unknown
					  </label>
					</div>
				</div>
				</div>
				<hr>
				<div class="row">
				<div class="col-md-12">
					<h5>Which option below best describes your job level?</h5>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="job_level" id="exampleRadios1" value="Individual contributor">
					  <label class="form-check-label" for="exampleRadios1">
						Individual contributor
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="job_level" id="exampleRadios1" value="Manager">
					  <label class="form-check-label" for="exampleRadios1">
						Manager
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="job_level" id="exampleRadios1" value="Director">
					  <label class="form-check-label" for="exampleRadios1">
						Director
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="job_level" id="exampleRadios1" value="Vice president">
					  <label class="form-check-label" for="exampleRadios1">
						Vice president
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="job_level" id="exampleRadios1" value="Senior vice president">
					  <label class="form-check-label" for="exampleRadios1">
						Senior vice president
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="job_level" id="exampleRadios1" value="C-suite role">
					  <label class="form-check-label" for="exampleRadios1">
						C-suite role
					  </label>
					</div>
				</div>
				</div>
				
				
				
				<hr>
				
				<div class="row">
				<div class="col-md-12">
					<h5>How many years have you been in a role leading others?</h5>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="years" id="exampleRadios1" value="option1" checked>
					  <label class="form-check-label" for="exampleRadios1">
						Less than a year
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="years" id="exampleRadios1" value="option1" checked>
					  <label class="form-check-label" for="exampleRadios1">
						1-5 years
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="years" id="exampleRadios1" value="option1" checked>
					  <label class="form-check-label" for="exampleRadios1">
						6-10 years
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="years" id="exampleRadios1" value="option1" checked>
					  <label class="form-check-label" for="exampleRadios1">
						10-15 years
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="years" id="exampleRadios1" value="option1" checked>
					  <label class="form-check-label" for="exampleRadios1">
						Over 15 years
					  </label>
					</div>
				</div>
				</div>
				
				
				<div class="row mt-4">
			  <div class="col-lg-12">
			  <button type="button" class="btn btn-primary">Submit</button>
			  </div>
			  </div>
			  
			  
				
				
			</div>
          
          <input type="hidden" name="survey_id" id="survey_id" value="{{ isset($survey->id) ? $survey->id : null }}">
          <input type="hidden" name="question_sort" id="question_sort" value="no">
          <div class="error-msg" style="color:red;"></div>
          <div class="question-listing" id="question-listing"></div>


          <div class="row mt-4">

            <div class="col-lg-1">

            </div>

            <div class="col-lg-8">



            </div>
          </div>
        </div>
      </div>
    </div>
</section>



@endsection

@section('page-script')
<script>
$(function () {
	$('input[name=gender]').change(function(){
	var value = $( 'input[name=gender]:checked' ).val();

	if(value == 'other'){
		$('#other-opt').slideToggle();
	}else{
		$('#other-opt').hide();
	}

	});

    // $('.t-com').on('click', function () {
    //     $('#other-opt').slideToggle();
    // });
});
</script>
@endsection