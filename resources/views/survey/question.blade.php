<div class="multisteps_form_panel step sub-card">
    <h5 class="card-header animate__animated animate__fadeInRight animate_25ms">{{$model->question}}</h5>
    <div class="card-body">
        <input type="hidden" name="question_id" id="question_id" value="{{$model->id}}">
        <input type="hidden" name="user_survey_id" id="user_survey_id" value="{{ isset($survey->id) ? $survey->id : null }}">
        @if ($model->options->count())
        <div id="sorting-list">
            @foreach ($model->options as $key=>$option)
            <div class="customRadio">
                <input type="hidden" name="options[]" value="{{$option->id}}">
                <label for="radio1"> {{$key+1}}. {{$option->option}}</label>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>