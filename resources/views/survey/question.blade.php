<div class="multisteps_form_panel step sub-card">
    <h5 class="card-header animate__animated animate__fadeInRight animate_25ms">{{$model->question}}</h5>
    <div class="card-body">
    <input type="hidden" name="question_id" id="question_id" value="{{$model->id}}">
    <input type="hidden" name="user_survey_id" id="user_survey_id" value="{{ isset($user_survey->id) ? $user_survey->id : null }}">

@php
  if(isset($user_survey)){
    dump($user_survey);
  }  
@endphp
        @if ($model->options->count())
            @foreach ($model->options as $key=>$option)
            <div class="form-check animate__animated animate__fadeInRight animate_25ms">
                <input class="form-check-input" type="radio" name="options" id="q_{{$option->id}}" value="{{$option->id}}">
                <label class="form-check-label" for="q_{{$option->id}}">
                    {{$key+1}}. {{$option->option}}
                </label>
            </div>
            @endforeach
        @endif
    </div>
</div>