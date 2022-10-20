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
                    <div class="d-flex justify-content-between">
                        <div class="pc-tagline">Progress: <strong>40% Complete</strong></div>
                        <div class="timer-text">
                         Time left : <span id="timer"></span>
                        </div>
                    </div>
                    <input type="hidden" name="survey_id" id="survey_id" value="{{ isset($survey->id) ? $survey->id : null }}">
                    <div class="question-listing" id="question-listing"></div>
                    <input type="hidden" name="page" id="page" value="{{$questions}}">
                    <div class="error-msg" style="color:red;"></div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <!-- <button type="button" class="btn btn-light" id="prevBtn" onclick="nextPrev(-1)"><i class="bi bi-arrow-left me-1"></i> Back</button> -->
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
    var moduleConfig = {
        redirectUrl: "{!! route('home') !!}"
    };

    $(document).ready(function() {
        configData = {url:configData.url,type:1,questionCnt:'{{$questions}}'}
        first_time_load(configData);

    });
    let survey_time = '{{ isset($survey->survey_time) ? $survey->survey_time : 40 }}';
    let minutes = Math.floor(survey_time / 60);
    let seconds = Math.floor(survey_time % 60 ? survey_time % 60 : '00');
    document.getElementById('timer').innerHTML =  (40 - minutes) + ":" + seconds;

//startTimer();
function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    return
  }

  document.getElementById('timer').innerHTML =
    m + ":" + s;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var survey_id = $('#survey_id').val();
        
        $.ajax({
           type:'POST',
           url:"{{route('update-survey-time')}}",
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
  setTimeout(startTimer, 1000);

}
function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}
</script>
@endsection